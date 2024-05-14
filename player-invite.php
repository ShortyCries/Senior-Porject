<?php 

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

try{

if (isset($_POST['classname']) && ($_POST['playeremail'])) {

    extract($_POST);

    $pieces = explode(" | ", $classname);

    $classid = $pieces[0];

    
   
    $query = "INSERT INTO joins VALUES('$playeremail','$classid', NULL , 'pending')";

    $result = $pdo->exec($query);
 
    $_SESSION['status'] = "Player Invited!";

    header("location:academy-Players.php");





}
    
} catch (PDOException $e) {
    $_SESSION['status'] = "OOPS! Looks like you already invited this player!";
     header("location:academy-Players.php");
}













?>
