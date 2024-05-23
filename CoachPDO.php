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


        $hashpw = md5($password);


        $query = "INSERT INTO login VALUES('$email','$name','$hashpw','coach' ,'active')";

        $result = $pdo->exec($query);

        $query1 = "INSERT INTO coach VALUES('$email','$name','$hashpw','$Dob',NULL,NULL,NULL) ";

        $result1 = $pdo->exec($query1);

        $query2 = "INSERT INTO trains VALUES('$email','$academyEmail', '$sport'  )";

        $result2 = $pdo->exec($query2);








        if ($result) {
            $_SESSION['status'] = "Coach added successfully";
            header("location:academy-Coaches.php");
        } else {
            $_SESSION['status'] = "Coach creation was unsuccessful";
            header("location:academy-Coaches.php");
        }
    }
} catch (PDOException $e) {

    $_SESSION['status'] = "Coach email used already!";
    header("location:academy-Coaches.php");
}
