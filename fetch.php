<?php

session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];

if (isset($_POST['sportID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $sportid = $_POST['sportID'];

    $query = "SELECT email, name FROM coach NATURAL JOIN trains WHERE email = coachemail AND academyemail = '$academyEmail' AND sportname = '$sportid' ";

    $result = $pdo->query($query);

    $r = $result->rowCount();

    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row[0]\"> $row[1] </option>";
    }
}






?>
