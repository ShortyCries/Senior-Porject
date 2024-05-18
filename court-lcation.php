<?php

session_start();
require_once("config.php");


if (isset($_POST['courtID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $court = $_POST['courtID'];

    $query = "SELECT CRLocDescription FROM courts WHERE CRid = '$court' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();

    $row = $result->fetch(PDO::FETCH_NUM);

  

  
        echo  "location: " . $row[0];
    
}



?>