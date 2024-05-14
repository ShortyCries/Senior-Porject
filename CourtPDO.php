<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['courtname'], $_POST['city'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


        extract($_POST);

        $size = $size1 . "x" . $size2 . "m";

        if ($price === "") {
            $price = null;
        }

        if ($maxcapacity === "") {
            $maxcapacity = null;
        }




        $query4 = "SELECT CRid FROM courts ORDER BY CRid DESC LIMIT 1";

        $result4 = $pdo->query($query4);


        $r4 = $result4->fetch(PDO::FETCH_COLUMN);

        $r4++;

        $query = "INSERT INTO courts VALUES('$r4', '$city' , '$description', '$courtname', '$size', '$academyEmail', '$sport', '$maxcapacity', '$price', '$CRtype')";

        $result = $pdo->exec($query);


        $weekDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");



        $query2 = "SELECT CRid FROM courts ORDER BY CRid DESC LIMIT 1";
        $result2 = $pdo->query($query2);
        $r2 = $result2->fetch(PDO::FETCH_COLUMN);
        $r2;
        
        
        
        for ($i = 0; $i < count($weekDays); $i++) {
            $query3 = "INSERT INTO Schedule VALUES('', '$r2', '$weekDays[$i]', NULL)";
            $result3 = $pdo->exec($query3);
        }
        
        

        if ($result) {
            $_SESSION['status'] = "Court added successfully";
            header("location:academy-Courts.php");
        } else {
            $_SESSION['status'] = "Class addition was unsuccessful";
            header("location:academy-Courts.php");
        }
    }
} catch (PDOException $e) {
    die($e->getMessage());
}
