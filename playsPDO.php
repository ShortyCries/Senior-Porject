<?php

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

if (isset($_POST['sport'], $_POST['role'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $sportid = $_POST['sport'];

    $roleid = $_POST['role'];

    $query = "DELETE FROM plays WHERE PLAplayeremail = '$playerEmail'";

    $result = $pdo->exec($query);


    $query2 = "INSERT INTO plays VALUES('$roleid','$playerEmail','$sportid')";

    $result2 = $pdo->exec($query2);


   
}

?>