
<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];


try {

    if (!isset($_POST['city'])) {
        $thecity = null;
    } else {
        $thecity = $_POST['city'];
    }


    if (!isset($_POST['locationDescription'])) {
        $theLocationDesc = null;
    } else {
        $theLocationDesc = $_POST['locationDescription'];
    }


    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


    extract($_POST);

    $query = "UPDATE academy SET name='$name', description = '$description', city = '$thecity', locDescription = '$theLocationDesc', phone = '$phone' WHERE email = '$academyEmail'";

    $result = $pdo->exec($query);

    $query2 = "UPDATE login SET name='$name' WHERE email = '$academyEmail'";

    $result2 = $pdo->exec($query2);



    header("location:Edit-Profile-academy.php");
} catch (PDOException $e) {
    die($e->getMessage());
}



?>