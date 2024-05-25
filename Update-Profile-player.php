<?php

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];


try {

   
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


    extract($_POST);

    $query = "UPDATE player SET name='$name', description = '$description', phone = '$phone', Gender = '$Gender' WHERE email = '$playerEmail'";

    $result = $pdo->exec($query);

    $query2 = "UPDATE login SET name='$name' WHERE email = '$playerEmail'";

    $result2 = $pdo->exec($query2);



    header("location:Edit-Profile-player.php");
} catch (PDOException $e) {
    die($e->getMessage());
}



?>