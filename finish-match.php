
<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];


if (isset($_POST['MATCHID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    extract($_POST);

    echo $MATCHID;


    $query1 = "UPDATE matchs SET Mstatus = 'finished' WHERE Mid = '$MATCHID'";

    $result1 = $pdo->exec($query1);

    header("location:academy-Games.php");


    }

?>