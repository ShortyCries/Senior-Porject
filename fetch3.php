<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];


if (isset($_POST['sportID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $sportid = $_POST['sportID'];

    $query1 = "SELECT CRid, name, size From courts WHERE Academyemail = '$academyEmail' AND sportname = '$sportid' ";

    $result1 = $pdo->query($query1);

    $r1 = $result1->rowCount();

    echo "<option selected disabled value=\"\">Choose...</option>";

    for ($i = 0; $i < $r1; $i++) {
        $row1 = $result1->fetch(PDO::FETCH_NUM);

        echo "<option value=\"$row1[0]\"> $row1[1] | $row1[2] </option>";
    }
}
