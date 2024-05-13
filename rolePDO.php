<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];




$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);




$roleNumbers = $_POST['roleNumber'];

$MIN = $_POST['MIN'];

$MAX = $_POST['MAX'];

$eventID = $_POST['eventID'];

print_r($roleNumbers);

echo $eventID;

echo $MAX;

echo $MIN;

$rolecounter = 0;

for ($i = $MIN; $i <= $MAX; $i++) {
    $query6 = "UPDATE need SET number = '$roleNumbers[$rolecounter]' WHERE eventid = '$eventID' AND rolid ='$i' ";
    $result6 = $pdo->exec($query6);

    $rolecounter++;
}