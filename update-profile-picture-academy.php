<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];


$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

extract($_POST);

if(!empty($_FILES['img']['name'])){
    $img = "img/" . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $img);
}



$query = "UPDATE academy SET img = :img WHERE email = :email";

$stmt = $pdo->prepare($query);

// Bind the parameters to the prepared statement
$stmt->bindParam(':img', $img);
$stmt->bindParam(':email', $academyEmail);

// Execute the statement
$result = $stmt->execute();


header("location:Edit-Profile-academy.php");


?>

