<?php

session_start();
require_once("config.php");


$THECOURTID = $_POST['courtIdSch'];
$THEDAY = $_POST['DaySch'];


// Initialize an empty array to hold the schedule strings
$scheduleStrings = array();

// Loop through the arrays
for ($i = 0; $i < count($_POST['startHH']); $i++) {
    // Format the start and end times
    $startTime = $_POST['startHH'][$i] . ':' . $_POST['startMM'][$i];
    $endTime = $_POST['endHH'][$i] . ':' . $_POST['endMM'][$i];

    // Check if start time is less than end time
    $validTimes = strtotime($endTime) > strtotime($startTime);

    // Check for overlapping times
    $overlap = false;
    for ($j = 0; $j < count($_POST['startHH']); $j++) {
        if ($i != $j && $validTimes) {
            // Compare current schedule with other schedules
            $startA = strtotime($startTime);
            $endA = strtotime($endTime);
            $startB = strtotime($_POST['startHH'][$j] . ':' . $_POST['startMM'][$j]);
            $endB = strtotime($_POST['endHH'][$j] . ':' . $_POST['endMM'][$j]);

            if ($startA < $endB && $endA > $startB) {
                // Overlapping schedules found
                $overlap = true;
                break ; // Exit both inner and outer loops
            }
        }
    }

    // Concatenate the formatted times into a schedule string
    if ($overlap || !$validTimes) {
        echo "overlap or invalid times!";
        break;
    } else {
        $scheduleStrings[] = "$startTime-$endTime";
    }
}

// If no overlap detected, join the schedule strings with commas to form the final result
if (!$overlap && $validTimes) {
    $resultString = implode(',', $scheduleStrings);

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $query = "UPDATE schedule SET timeSlot = '$resultString' WHERE courtId = '$THECOURTID' AND day = '$THEDAY'";

    $result = $pdo->exec($query);

    echo "Saved!";
}

?>