<?php

session_start();
require_once("config.php");

$coachEmail = $_SESSION['email'];


try {


    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


    extract($_POST);

    $query = "UPDATE coach SET name='$name', description = '$description', phone = '$phone' WHERE email = '$coachEmail'";

    $result = $pdo->exec($query);

    $query2 = "UPDATE login SET name='$name' WHERE email = '$coachEmail'";

    $result2 = $pdo->exec($query2);



    header("location:Edit-Profile-coach.php");
} catch (PDOException $e) {
    die($e->getMessage());
}



?>