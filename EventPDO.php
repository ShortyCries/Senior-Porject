<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];
try {


    if (isset($_POST['sport'], $_POST['time'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);


        $query7 = "SELECT Evtime FROM events WHERE playeremail = '$playerEmail' AND Evstatus = 'booked' AND Evdate = '$date'";

        $result7 = $pdo->query($query7);

        $r7 = $result7->fetchAll(PDO::FETCH_COLUMN);

        // echo $r7[0];

        // echo $time;


        function parse_time_range($time_range)
        {
            list($start, $end) = explode('-', $time_range);
            return [strtotime($start), strtotime($end)];
        }

        function times_overlap($range1, $range2)
        {
            list($start1, $end1) = parse_time_range($range1);
            list($start2, $end2) = parse_time_range($range2);

            return $start1 < $end2 && $start2 < $end1;
        }

        if (isset($r7[0])) {
            if (times_overlap($r7[0], $time)) {
                $_SESSION['status'] = 'OOPS! Looks like you already have an event during that time!';
                header("location:player-games.php");
                exit();
            }
        }


        $query99 = "SELECT Evtime FROM participate NATURAL JOIN events WHERE PReventid = Eid AND PRplayeremail = '$playerEmail' AND PRstatus = 'accepted' AND Evstatus = 'booked' AND Evdate = '$date'";

        $result99 = $pdo->query($query99);


        $r99 = $result99->fetchALL(PDO::FETCH_COLUMN);

        echo $r99[0];

        echo $r99[1];


        function parseTimeInterval($interval)
        {
            list($startTimeStr, $endTimeStr) = explode('-', $interval);
            $startTime = DateTime::createFromFormat('H:i', $startTimeStr);
            $endTime = DateTime::createFromFormat('H:i', $endTimeStr);
            return array($startTime, $endTime);
        }

        function checkOverlap($interval1, $interval2)
        {
            list($start1, $end1) = parseTimeInterval($interval1);
            list($start2, $end2) = parseTimeInterval($interval2);
            return $start1 < $end2 && $start2 < $end1;
        }


        if (isset($r99[0])) {


            $overlaps = array();
            foreach ($r99 as $interval) {
                if (checkOverlap($time, $interval)) {
                    $overlaps[] = $interval;
                }
            }



            if (!empty($overlaps)) {
                $_SESSION['status'] = 'OOPS! Looks like you already joined an event at this time!';
                header("location:player-games.php");
                exit();
            }
        }




        $query4 = "SELECT Eid FROM events ORDER BY Eid DESC LIMIT 1";

        $result4 = $pdo->query($query4);

        $r4 = $result4->fetch(PDO::FETCH_COLUMN);

        $r4++;

        $query = "INSERT INTO events VALUES('$r4','$court', '$playerEmail', '$date', '$time', 'booked', '$eventTitle', '$eventDescription')";

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
    $_SESSION['status'] = "Event creation was unsuccessful";
    header("location:player-games.php");
    
}
