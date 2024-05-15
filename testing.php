<?php 


session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];



   
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        
        $query7 = "SELECT Evtime FROM events WHERE playeremail = 'afnan@hotmail' AND Evstatus = 'booked' AND Evdate = '2024-05-16'";

        $result7 = $pdo->query($query7);

        $r7 = $result7->fetchAll(PDO::FETCH_COLUMN);

        echo $r7[0];
        
        function parse_time_range($time_range) {
            list($start, $end) = explode('-', $time_range);
            return [strtotime($start), strtotime($end)];
        }
        
        function times_overlap($range1, $range2) {
            list($start1, $end1) = parse_time_range($range1);
            list($start2, $end2) = parse_time_range($range2);
        
            return $start1 < $end2 && $start2 < $end1;
        }
        
        // $r0 = "15:00-16:00";
        $time = "14:30-15:30";
        
        if (times_overlap($r7[0], $time)) {
            echo "The time ranges overlap.";
        } else {
            echo "The time ranges do not overlap.";
        }
        ?>
        //15:00-16:00
                    //14:30-15:00

        