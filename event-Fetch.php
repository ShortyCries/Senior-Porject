<?php

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

if (isset($_POST['sport'], $_POST['city'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $sport = $_POST['sport'];

    $city = $_POST['city'];

    $query = "SELECT CRid, CRname, CRsize, CRprice FROM courts WHERE CRsportname = '$sport' AND CRlocation = '$city' AND CRtype = 'public'";

    $result = $pdo->query($query);

    $r = $result->rowCount();

   echo "<option selected disabled value=\"\">Choose...</option>";

    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row[0]\"> $row[1] | $row[2] | $row[3]$/hour </option>";
    }
}



?>