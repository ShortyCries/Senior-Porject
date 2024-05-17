<?php

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

if (isset($_POST['sportID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $sportid = $_POST['sportID'];

    $query = "SELECT Rid, Rname FROM role WHERE sport = '$sportid'";

    $result = $pdo->query($query);

    $r = $result->rowCount();

    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row[0]\"> $row[1] </option>";
    }
}






?>
