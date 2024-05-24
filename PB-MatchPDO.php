<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['PBsport'], $_POST['PBtime'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $query = "INSERT INTO matchs VALUES('' ,'$PBteam1', '$PBteam2', '$PBcourt','$PBdate', '$PBtime', 'public', 'booked', '0', '0')";

        $result = $pdo->exec($query);


        if ($result) {
            $_SESSION['status'] = "Match created successfully";
            header("location:academy-Games.php");
        } else {
            $_SESSION['status'] = "Match creation was unsuccessful";
            header("location:academy-Games.php");
        }
    }
} catch (PDOException $e) {
    $_SESSION['status'] = "Match creation was unsuccessful";
    header("location:academy-Games.php");
   
}



?>
?>