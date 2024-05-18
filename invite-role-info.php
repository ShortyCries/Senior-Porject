<?php


session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];


print_r($_POST);

if (isset($_POST['eventID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


    $eventID = $_POST['eventID'];


    $query = "SELECT CRsportname FROM events NATURAL JOIN courts WHERE CRid = Evcourtid AND Eid = '$eventID'";

    $result = $pdo->query($query);

    $row = $result->fetch(PDO::FETCH_NUM);


    $query2 = "SELECT Rid, Rname FROM role WHERE sport = '$row[0]'";


    $result2 = $pdo->query($query2);

    $r2 = $result2->rowCount();


    for($i = 0; $i < $r2; $i++){
        $row2 = $result2->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row2[0]\">" . $row2[1] . "</option>";

    }




}
