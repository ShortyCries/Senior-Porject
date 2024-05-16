<?php


session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['P-EMAIL'], $_POST['CLASS-ID'])) {

    $Pemail= $_POST['P-EMAIL'];

    $classID = $_POST['CLASS-ID'];

    $description = $_POST['description'];

    //my report: $decption, $newtime, $currentdate

    //sperator = [~|~]
    //  echo $Pemail;

    //  echo $classID;

    // echo $description;

    $currentTime = date('H:i:s');

    $dateTime = new DateTime($currentTime);

    $dateTime->modify('+1 hour');

    // Format the new time
    $newTime = $dateTime->format('H:i:s');
    
    // echo $newTime;


    $currentDate = date('Y-m-d');

    // echo $currentDate;



    $query = "SELECT report FROM joins WHERE playeremail = '$Pemail' AND classId = '$classID'";

    $result = $pdo->query($query);

    $r = $result->fetch(PDO::FETCH_NUM);

    $report2 = array("description" => $description, "date" =>  $currentDate, "time" =>  $newTime);

    $separator = "[~|~]";

    $concatenatedReport =   implode($separator, $report2) . $separator . implode($separator, $r);




    $query2 = "UPDATE joins SET report = '$concatenatedReport' WHERE playeremail='$Pemail' AND classId='$classID'";

    $result2 = $pdo->exec($query2);


    header("location:coach-class-info.php?class_id=$classID");



    

    

}

?>