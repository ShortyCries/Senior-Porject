<?php 

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['coach_email'];


    $query = "SELECT name, email, DOB, description, phone FROM coach where email = '$email' ";

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
        echo "<div class=\"info-section\"><span class=\"label\">Age</span><span class=\"content\">" . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Description:</span><span class=\"content\">" . htmlspecialchars($row[3], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Email:</span><span class=\"content\">" . htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8') . "</span></div>";
        echo "<div class=\"info-section\"><span class=\"label\">Phone:</span><span class=\"content\">" . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . "</span></div>";
       
      
    }


    $query2 = "SELECT name FROM trains NATURAL JOIN academy WHERE academyemail = email AND coachemail ='$email' ";

    $result2 = $pdo->query($query2);

    $r2 = $result2->fetch(PDO::FETCH_NUM);


    echo "<div class=\"info-section\"><span class=\"label\">Academy:</span><span class=\"content\">" . htmlspecialchars($r2[0], ENT_QUOTES, 'UTF-8') . "</span></div>";

    echo "</div>";

}


?>