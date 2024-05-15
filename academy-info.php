<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['academy_email'];


    $query = "SELECT name, email, foundedIn, description, city, locDescription, phone FROM academy where email = '$email' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();


    echo "<div class=\"container\">";
    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);
        
       
        echo "<div class=\"info-section\"><span class=\"label\">Name:</span><span class=\"content\">" . htmlspecialchars($row[0], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Founded:</span><span class=\"content\">" . htmlspecialchars($row[2], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Description:</span><span class=\"content\">" . htmlspecialchars($row[3], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">City:</span><span class=\"content\">" . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Location:</span><span class=\"content\">" . htmlspecialchars($row[5], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Email:</span><span class=\"content\">" . htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Phone:</span><span class=\"content\">" . htmlspecialchars($row[6], ENT_QUOTES, 'UTF-8') . "</span></div>";
       
      
    }

    echo "<div>";

}
