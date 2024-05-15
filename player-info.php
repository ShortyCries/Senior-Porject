<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['player_email'];


    $query = "SELECT name, email, DOB, description, phone description FROM player where email = '$email' ";

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
