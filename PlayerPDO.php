<?php
require_once("config.php");

try {
    if (isset($_POST['email'], $_POST['password'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        echo "<h1>  Hello this is checking if i am  actually a player </h1> <br>";


        $date = date("Y-m-d", strtotime($Dob));


        $hashpw= md5($password);

        $query = "INSERT INTO login VALUES('$email','$name','$hashpw','player','active')";

        $result = $pdo->exec($query);

        $query1 = "INSERT INTO player VALUES('$email','$name','$date','$hashpw', NULL, NULL) ";

        $result1 = $pdo->exec($query1);

        header("location:index.php");
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
