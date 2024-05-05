<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['email'], $_POST['password'])) {
        echo "hello";
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        echo "<h1>  Hello this is checking if i am  actually a coach </h1> <br>";



        $query = "INSERT INTO login VALUES('$email','$name','$password','coach' ,'active')";

        $result = $pdo->exec($query);

        $query1 = "INSERT INTO coach VALUES('$email','$name','$password','$Dob',NULL,NULL) ";

        $result1 = $pdo->exec($query1);

        $query2 = "INSERT INTO trains VALUES('$email','$academyEmail', '$sport'  )";

        $result2 = $pdo->exec($query2);
        header("location:academy-Coaches.php");
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
