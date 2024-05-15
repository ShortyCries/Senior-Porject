<?php 

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['coach_email'];


    $query = "SELECT name, email FROM coach where email = '$email' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();


    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);

        echo '<h6>' . $row[0] . '</h6>';
        echo '<h6>' . $row[1] . '</h6>';
      
    }

}


?>