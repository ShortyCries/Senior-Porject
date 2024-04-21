<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['courtname'], $_POST['city'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        
        extract($_POST);

        $size = $size1 . "x" . $size2 . "m";

        if($price === ""){
            $price = null;
        }

        if($maxcapacity === ""){
            $maxcapacity = null;
        }

        
        $location = $city . " | " . $description;


        echo $location;



        $query = "INSERT INTO courts VALUES('', '$location' , '$courtname', '$size', '$academyEmail', '$sport', '$maxcapacity', '$price')";

        $result = $pdo->exec($query);


        if($result){
             $_SESSION['status'] = "Court added successfully";
             header("location:academy-Courts.php");

        } else {
            $_SESSION['status'] = "Class addition was unsuccessful";
            header("location:academy-Courts.php");
        }



        
        





    }









} catch (PDOException $e) {
    die($e->getMessage());
}
