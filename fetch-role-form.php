<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];
try {


    if (isset($_POST['courtID'], $_POST['eventID'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);




        // echo $courtID;

        // echo $eventID;

        $query = "SELECT CRsportname FROM courts WHERE CRid = '$courtID'";

        $result = $pdo->query($query);

        $r = $result->fetch(PDO::FETCH_COLUMN);

        // echo $r;





        $query3 = "SELECT MIN(Rid) AS MIN FROM Role WHERE sport = '$r'";

        $result3 = $pdo->query($query3);

        $MIN = $result3->fetch(PDO::FETCH_COLUMN);


        $query6 = "SELECT MAX(Rid) AS MAX FROM Role WHERE sport = '$r'";

        $result6 = $pdo->query($query6);

        $MAX = $result6->fetch(PDO::FETCH_COLUMN);



        // echo $MIN;

        // echo $MAX;



        $query7 = "SELECT Rid, Rname FROM role WHERE sport = '$r'";

        $result7 = $pdo->query($query7);

        $r7 = $result7->rowCount();

        // echo $r7;



        echo "<input type=\"hidden\" name=\"eventID\" style=\"border:solid;\" value=\"$eventID\">";
        echo "<input type=\"hidden\" name=\"MIN\" style=\"border:solid;\" value=\"$MIN\">";
        echo "<input type=\"hidden\" name=\"MAX\" style=\"border:solid;\" value=\"$MAX\">";

        echo "<table>";
        for ($i = 0; $i < $r7; $i++) {
            $row = $result7->fetch(PDO::FETCH_NUM);
            echo "<tr><td>$row[1] :</td><td><input type=\"number\" name=\"roleNumber[]\" style=\"border:solid;\" value=\"0\"></td></tr>";
        }
        echo "</table>";






        //     for ($i = $MIN; $i <= $MAX; $i++) {
        //         $query6 = "INSERT INTO need VALUES('$i', '$r2', NULL)";
        //         $result6 = $pdo->exec($query6);
        //     }















        //     if ($result) {
        //         $_SESSION['status'] = "Event created successfully";
        //         header("location:player-games.php");
        //     } else {
        //         $_SESSION['status'] = "Event creation was unsuccessful";
        //         header("location:player-games.php");
        //     }
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
