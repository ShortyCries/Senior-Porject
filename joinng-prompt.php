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

    $query = "SELECT CRsportname FROM courts NATURAL JOIN events WHERE CRid = Evcourtid AND Eid = '$eventID'";

    $result = $pdo->query($query);

    $r = $result->fetch(PDO::FETCH_NUM);


    $query1 = "SELECT Rid, Rname FROM role WHERE sport = '$r[0]'";

    $result1 = $pdo->query($query1);

    $r1 = $result1->rowCount();

    for ($i = 0; $i < $r1; $i++) {
        $row1 = $result1->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row1[0]\"> $row1[1] </option>";
    }


        
}



?>
