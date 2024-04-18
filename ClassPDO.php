<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['className'], $_POST['capacity'])) {
        echo "hello";
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $schedule = "";

        
        foreach ($days as $day) {
            $schedule .= $day . " ";
        }

        $schedule .= $timing;


        $pieces = explode(" | ", $coach);

        $coachEmail = $pieces[1];


        echo $schedule;

        echo $coachEmail;

        if($sport == "Football"){
            $sportID = '1';
        } else if($sport == "Basketball"){
            $sportID = '2';
        } else if($sport == "Volleyball"){
            $sportID = '3';
        } else if($sport == "Tennis"){
            $sportID = '4';
        }


        $query = "INSERT INTO class VALUES( '' ,'$className', '$sportID', '$academyEmail', '$coachEmail', '$capacity', '$schedule')";

        $result = $pdo->exec($query);










        header("location:academy-Classes.php");
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
