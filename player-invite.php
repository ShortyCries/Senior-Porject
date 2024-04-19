<?php 

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['classname']) && ($_POST['playeremail'])) {

    extract($_POST);

    $pieces = explode(" | ", $classname);

    $classid = $pieces[0];

    
   
    $query = "INSERT INTO joins VALUES('$playeremail','$classid', NULL , 'pending')";

    $result = $pdo->exec($query);


    header("location:academy-Players.php");





}
    












?>
