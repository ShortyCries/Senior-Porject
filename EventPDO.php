<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];
try {


    if (isset($_POST['sport'], $_POST['time'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $query4 = "SELECT Eid FROM events ORDER BY Eid DESC LIMIT 1";

        $result4 = $pdo->query($query4);

        $r4 = $result4->fetch(PDO::FETCH_COLUMN);

        $r4++;

        $query = "INSERT INTO events VALUES('$r4','$court', '$playerEmail', '$date', '$time', 'booked')";

        $result = $pdo->exec($query);



        $query2 = "SELECT Eid FROM events ORDER BY Eid DESC LIMIT 1";

        $result2 = $pdo->query($query2);

        $r2 = $result2->fetch(PDO::FETCH_COLUMN); //the currently added Eid




        $query3 = "SELECT MIN(Rid) AS MIN FROM Role WHERE sport = '$sport'";

        $result3 = $pdo->query($query3);

        $MIN = $result3->fetch(PDO::FETCH_COLUMN);


        $query6 = "SELECT MAX(Rid) AS MAX FROM Role WHERE sport = '$sport'";

        $result6 = $pdo->query($query6);

        $MAX = $result6->fetch(PDO::FETCH_COLUMN);





        for ($i = $MIN; $i <= $MAX; $i++) {
            $query6 = "INSERT INTO need VALUES('$i', '$r2', NULL)";
            $result6 = $pdo->exec($query6);
        }
        














        if ($result) {
            $_SESSION['status'] = "Event created successfully";
            header("location:player-games.php");
        } else {
            $_SESSION['status'] = "Event creation was unsuccessful";
            header("location:player-games.php");
        }
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
