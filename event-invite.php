<?php


session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];


print_r($_POST);

try {

if (isset($_POST['eventID'], $_POST['playeremail'], $_POST['roleID'])) {


    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


    $email = $_POST['playeremail'];

    $eventID = $_POST['eventID'];

    $roleID = $_POST['roleID'];




    $query = "INSERT INTO participate VALUES ('$email', '$eventID', '$roleID', 'invited')";

    $result = $pdo->exec($query);


    $_SESSION['status'] = "invite sent!";

    header("location:player-players.php");








}

} catch (PDOException $e){
    $_SESSION['status'] = "You already invited this player!";
    header("location:player-players.php");
}
