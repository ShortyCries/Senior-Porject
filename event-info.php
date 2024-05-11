<?php 

// 'courtID': courtID,
// 'eventID': eventID,

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

if (isset($_POST['courtID'], $_POST['eventID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $courtID = $_POST['courtID'];

    $eventID = $_POST['eventID'];

    $query = "SELECT * FROM courts NATURAL JOIN events WHERE CRid = Evcourtid AND Eid = '$eventID'";

    $result = $pdo->query($query);

    $r = $result->fetch(PDO::FETCH_NUM);

    
    echo "city: $r[1] <br>";
    echo "location description: $r[2] <br>";
    echo "court name: $r[3] <br>";
    echo "court size: $r[4] <br>";
    echo "sport: $r[6] <br>";
    echo "capacity: $r[7] <br>";
    echo "game date: $r[12] <br>";
    echo "game time: $r[13] <br>";


       

        
}



?>