<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];
try {


    if (isset($_POST['sport'], $_POST['time'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $query = "INSERT INTO events VALUES(' ','$court', '$playerEmail', '$date', '$time', 'booked')";

        $result = $pdo->exec($query);


        if($result){
             $_SESSION['status'] = "Event created successfully";
             header("location:player-games.php");

        } else {
            $_SESSION['status'] = "Event creation was unsuccessful";
            header("location:player-games.php");
        }







       
    }
} catch (PDOException $e) {
    die($e->getMessage());
}



?>