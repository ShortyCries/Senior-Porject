<?php


session_start();
require_once("config.php");

$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];

// Hash the new password using MD5
$hashedPassword = md5($newPassword);

// Prepare SQL statement to update the password
$sql = "UPDATE player SET password = :password WHERE email = :email AND password = :oldPassword";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        'password' => $hashedPassword,
        'email' => 'ahmad@hotmail.com', // Assuming you have a session variable for the current user
        'oldPassword' => md5($oldPassword) // MD5 hash of the old password
    ));

    // Check if any rows were affected
    if ($stmt->rowCount() > 0) {
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
    // error_log("Database error: " . $e-&gt;getMessage());
}
?>




