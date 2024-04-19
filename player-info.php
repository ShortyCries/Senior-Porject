<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);



if (isset($_POST['click_readmore_btn'])) {
    $email = $_POST['player_email'];


    $query = "SELECT name, email, DOB, description FROM player where email = '$email' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();


    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM); 

        echo '<h6>' . $row[0] . '</h6>';
        echo '<h6>' . $row[1] . '</h6>';
        echo '<h6>' . $row[2] . '</h6>';
      
    }

}


if (isset($_POST['click_invite_btn'])) {
    $email1 = $_POST['player_email'];

    $query1 = "SELECT email FROM player where email = '$email1' ";

    $result1 = $pdo->query($query1);

    $r1 = $result1->rowCount();

    for ($i = 0; $i < $r1; $i++) {
        $row1 = $result1->fetch(PDO::FETCH_NUM); 

        echo $row1[0] ;
      
      
    }


}


?>
