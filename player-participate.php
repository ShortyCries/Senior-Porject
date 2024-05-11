<?php


session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

try {

if (isset($_POST['rolename'], $_POST['eventID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $roleID = $_POST['rolename'];

    $eventID = $_POST['eventID'];

    echo $eventID;

    echo $roleID;

    $query = "INSERT INTO participate VALUES ('$playerEmail', '$eventID', '$roleID', 'requested')";

    $result = $pdo->exec($query);

    



        
}


} catch (PDOException $e) {


    echo "You already joined this event!";


}



?>
