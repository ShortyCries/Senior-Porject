<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];



if (isset($_POST['courtId'], $_POST['dateSelected'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $courtId = $_POST['courtId'];

    $dateSelected = $_POST['dateSelected'];

    $testarr = array('9:00-10:30', '10:30-12:00', '12:00-13:30', '13:30-15:00', '15:00-16:30', '16:30-18:00', '18:00-19:30', '19:30-21:00', '21:00-22:30');

    $non_equal_strings = array();

    $query = "SELECT time FROM matchs WHERE courtid = '$courtId' AND date = '$dateSelected'";

    $result = $pdo->query($query);


    $r = $result->fetchAll(PDO::FETCH_COLUMN);


    foreach ($testarr as $time_slot) {
        // Check if the time slot exists in the $result_array
        if (!in_array($time_slot, $r)) {
            // If not found, add it to the $non_equal_strings array
            $non_equal_strings[] = $time_slot;
        }
    }
    
    // Print out the non-equal strings
    foreach ($non_equal_strings as $non_equal_string) {
        echo "<option> $non_equal_string </option>" ;
    }


}