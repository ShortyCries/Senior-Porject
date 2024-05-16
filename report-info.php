<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['playerEmail'], $_POST['classID'])) {

    $playerEmail = $_POST['playerEmail'];
    $classID = $_POST['classID'];


    $query5 = "SELECT report FROM joins WHERE playeremail = '$playerEmail' AND classId='$classID'";


    $result5 = $pdo->query($query5);

    $r5 = $result5->fetch(PDO::FETCH_COLUMN);


    // echo $r5;


    $separator = "[~|~]";

    $individualReports = explode($separator, $r5);


    $reports = array_chunk($individualReports, 3);



    // print_r($reports);
    echo " <div class=\"container\">";

    for ($counter = 0; $counter < count($reports) - 1; $counter++) {
       
        echo "<div class=\"info-section\"><span class=\"label\">Date:</span><span class=\"content\">" . htmlspecialchars($reports[$counter][1], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Time:</span><span class=\"content\">" . htmlspecialchars($reports[$counter][2], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Report:</span><span class=\"content\">" . htmlspecialchars($reports[$counter][0], ENT_QUOTES, 'UTF-8') . "</span></div>";

        
    }

    //actual count of the reports


    echo "</div>";


   
}
