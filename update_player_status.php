
<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];



    if (isset($_POST['class_id'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

       $courtId = $_POST['class_id'];


       
        $query = "UPDATE joins SET status='accepted' WHERE classid = '$courtId' AND playeremail = '$playerEmail'";

        $result = $pdo->exec($query);







    }
