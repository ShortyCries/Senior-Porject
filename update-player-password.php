<?php
session_start();
require_once("config.php");

$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

$playerEmail = $_SESSION['email'];

$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];

// Hash the new password using MD5
$hashedPassword = md5($newPassword);

// Prepare SQL statement to update the password for the player table
$playerSql = "UPDATE player SET password = :password WHERE email = :email AND password = :oldPassword";

// Prepare SQL statement to update the password for the login table
$loginSql = "UPDATE login SET password = :password WHERE email = :email AND password = :oldPassword";

try {
    // Update password for player table
    $playerStmt = $pdo->prepare($playerSql);
    $playerStmt->execute(array(
        'password' => $hashedPassword,
        'email' => $playerEmail,
        'oldPassword' => md5($oldPassword)
    ));

    // Update password for login table
    $loginStmt = $pdo->prepare($loginSql);
    $loginStmt->execute(array(
        'password' => $hashedPassword,
        'email' => $playerEmail,
        'oldPassword' => md5($oldPassword)
    ));

    // Check if any rows were affected
    if ($playerStmt->rowCount() > 0 || $loginStmt->rowCount() > 0) {
        // Password updated successfully
        echo "success";
    } else {
        // No rows were affected, meaning old password might be incorrect
        echo "incorrect";
    }
} catch (PDOException $e) {
    // Handle database errors
    echo "error";
    // You might want to log the error for debugging purposes
    // error_log("Database error: " . $e->getMessage());
}
?>
