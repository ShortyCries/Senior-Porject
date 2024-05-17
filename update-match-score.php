
<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];


if (isset($_POST['MATCHID'], $_POST['team1Score'], $_POST['team2Score'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    

    extract($_POST);

    echo $MATCHID;

    echo $team1Score;

    echo $team2Score;

    $query1 = "UPDATE matchs SET team1Score = '$team1Score', team2Score = '$team2Score' WHERE Mid = '$MATCHID'";

    $result1 = $pdo->exec($query1);

    header("location:academy-Games.php");


    }

?>