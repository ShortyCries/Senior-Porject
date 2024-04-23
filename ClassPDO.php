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





      


        $query = "INSERT INTO class VALUES( '' ,'$className', '$sport', '$academyEmail', '$coach', '$capacity', '$schedule')";

        $result = $pdo->exec($query);


        if($result){
             $_SESSION['status'] = "Class created successfully";
             header("location:academy-Classes.php");

        } else {
            $_SESSION['status'] = "Class creation was unsuccessful";
            header("location:academy-Classes.php");
        }







       
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
