<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];



if (isset($_POST['courtId'], $_POST['dateSelected'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $courtId = $_POST['courtId'];

    $dateSelected = $_POST['dateSelected'];


    $timestamp = strtotime($dateSelected);
    $dayOfWeek = date("l", $timestamp);

    $query1 = "SELECT timeSlot FROM Schedule WHERE courtid = '$courtId' AND day = '$dayOfWeek' ";

    $result1 = $pdo->query($query1);

    $r1 = $result1->fetch(PDO::FETCH_COLUMN);

    $times = explode(",", $r1);

    $filtered_time_slots = [];

    $current_time = strtotime(date("H:i", strtotime(date("H:i") . " +1 hour")));

    


    $non_equal_strings = array();

    $query = "SELECT Mtime AS Timing FROM Matchs WHERE Mcourtid = '$courtId' AND Mdate = '$dateSelected' UNION SELECT Evtime AS Timing FROM Events WHERE Evcourtid = '$courtId' AND Evdate = '$dateSelected'";

    $result = $pdo->query($query);


    $r = $result->fetchAll(PDO::FETCH_COLUMN);



        
if((strtotime(date("Y-m-d"))) == (strtotime($dateSelected))){
    foreach ($times as $time_slot1) {

        list($start_time, $end_time) = explode('-', $time_slot1);
        $start_time = strtotime($start_time);
        if ($start_time > $current_time) {
            $filtered_time_slots[] = $time_slot1;
        }
    }



    foreach ($filtered_time_slots as $time_slot) {
        // Check if the time slot exists in the $result_array
        if (!in_array($time_slot, $r)) {
            // If not found, add it to the $non_equal_strings array
            $non_equal_strings[] = $time_slot;
        }
    }

    // Print out the non-equal strings
    foreach ($non_equal_strings as $non_equal_string) {
        echo "<option> $non_equal_string </option>";
    }

} else {



    foreach ($times as $time_slot) {
        // Check if the time slot exists in the $result_array
        if (!in_array($time_slot, $r)) {
            // If not found, add it to the $non_equal_strings array
            $non_equal_strings[] = $time_slot;
        }
    }

    // Print out the non-equal strings
    foreach ($non_equal_strings as $non_equal_string) {
        echo "<option> $non_equal_string </option>";
    }

}
}
