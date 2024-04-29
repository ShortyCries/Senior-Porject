<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['sport'], $_POST['time'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $query = "INSERT INTO matchs VALUES( '' ,'$team1', '$team2', '$court','$date', '$time', 'local', 'booked')";

        $result = $pdo->exec($query);


        if($result){
             $_SESSION['status'] = "Match created successfully";
             header("location:academy-Games.php");

        } else {
            $_SESSION['status'] = "Match creation was unsuccessful";
            header("location:academy-Games.php");
        }







       
    }
} catch (PDOException $e) {
    die($e->getMessage());
}



?>