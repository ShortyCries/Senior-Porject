<?php


session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

try {

    if (isset($_POST['rolename'], $_POST['eventID'])) {

        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        $roleID = $_POST['rolename'];

        $eventID = $_POST['eventID'];

        // echo $eventID;

        // echo $roleID;



        $query100 = "SELECT Evdate FROM events WHERE Eid = '$eventID'";

        $result100 = $pdo->query($query100);

        $r100 = $result100->fetchALL(PDO::FETCH_COLUMN);

        // echo $r100[0] . "==========";

        $query99 = "SELECT Evtime FROM participate NATURAL JOIN events WHERE PReventid = Eid AND PRplayeremail = '$playerEmail' AND PRstatus = 'accepted' AND Evstatus = 'booked' AND Evdate = '$r100[0]'";


        $result99 = $pdo->query($query99);

        $r99 = $result99->fetchALL(PDO::FETCH_COLUMN);



        $query15 = "SELECT Evtime FROM events WHERE Eid ='$eventID'";

        $result15 = $pdo->query($query15);

        $r15 = $result15->fetch(PDO::FETCH_COLUMN);

        echo $r15; //giveninterval

        print_r($r99); //intervals

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
                if (checkOverlap($r15, $interval)) {
                    $overlaps[] = $interval;
                }
            }

            if (!empty($overlaps)) {
                $_SESSION['status'] = 'OOPS! Looks like you already joined an event at this time!';
                header("location:player-games.php");
                exit();
            }
        }


        $query7 = "SELECT Evtime FROM events WHERE playeremail = '$playerEmail' AND Evstatus = 'booked' AND Evdate = '$r100[0]'";

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
            if (times_overlap($r7[0], $r15)) {
                $_SESSION['status'] = 'OOPS! Looks like you already have booked an event during that time!';
                header("location:player-games.php");
                exit();
            }
        }




       
        $query = "INSERT INTO participate VALUES ('$playerEmail', '$eventID', '$roleID', 'requested')";

        $result = $pdo->exec($query);



        $_SESSION['status'] = "Request to join has been sent!";
        header("location:player-games.php");


    }
} catch (PDOException $e) {

    $_SESSION['status'] = "You already requested to join this event!";
    header("location:player-games.php");
}
