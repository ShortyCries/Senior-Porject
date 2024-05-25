<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);





if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['player_email'];

    $query2 = "SELECT Rname, sport FROM role NATURAL JOIN plays WHERE Rid = PLAroleid AND PLAplayeremail ='$email'";

    $result2 = $pdo->query($query2);

    $row2 = $result2->fetch(PDO::FETCH_NUM);



    $query = "SELECT name, email, DOB, description, phone, Gender description FROM player where email = '$email' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();



    echo "<div class=\"container\">";
    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);

        $birthDateObj = new DateTime($row[2]);

        // Get the current date
        $today = new DateTime('today');

        // Calculate the age
        $age = $birthDateObj->diff($today)->y;


        echo "<div class=\"info-section\"><span class=\"label\">Name:</span><span class=\"content\">" . htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Age:</span><span class=\"content\">" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Description:</span><span class=\"content\">" . htmlspecialchars($row[3], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Email:</span><span class=\"content\">" . htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Phone:</span><span class=\"content\">" . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Gender:</span><span class=\"content\">" . htmlspecialchars($row[5], ENT_QUOTES, 'UTF-8') . "</span></div>";
    }
    if(isset($row2[0])){
    echo "<div class=\"info-section\"><span class=\"label\">Sport Speciality:</span><span class=\"content\">" . htmlspecialchars($row2[1], ENT_QUOTES, 'UTF-8') . "(" . htmlspecialchars($row2[0], ENT_QUOTES, 'UTF-8') . ")" . "</span></div>";
}
    echo "</div>";
}


if (isset($_POST['click_invite_btn'])) {
    $email1 = $_POST['player_email'];

    $query1 = "SELECT email FROM player where email = '$email1' ";

    $result1 = $pdo->query($query1);

    $r1 = $result1->rowCount();

    for ($i = 0; $i < $r1; $i++) {
        $row1 = $result1->fetch(PDO::FETCH_NUM);

        echo $row1[0];
    }
}
