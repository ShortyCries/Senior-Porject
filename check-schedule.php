<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['courtID'])) {


    $courtID = $_POST['courtID'];


    $query2 = "SELECT timeSlot FROM schedule WHERE courtId = '$courtID'";

    $result2 = $pdo->query($query2);


    $r2 = $result2->rowCount();

    echo "<div class=\"container\">";

    $row = $result2->fetchAll(PDO::FETCH_COLUMN);


    echo "<div class=\"info-section\"><span class=\"label\">Monday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[0]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Tuesday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[1]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Wednesday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[2]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Thursday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[3]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Friday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[4]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Saturday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[5]), ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Sunday:</span><span class=\"content\">" . htmlspecialchars(str_replace(",", "|", $row[6]), ENT_QUOTES, 'UTF-8') . "</span></div>";

    echo "</div>";
}
