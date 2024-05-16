<?php
require_once("config.php");

try {
    if (isset($_POST['email'], $_POST['password'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        echo "<h1>  Hello this is checking if i am  actually a player </h1> <br>";


        $date = date("Y-m-d", strtotime($Dob));


        $hashpw= md5($password);

        $query = "INSERT INTO login VALUES('$email','$name','$hashpw','player','active')";

        $result = $pdo->exec($query);

        $query1 = "INSERT INTO player VALUES('$email','$name','$date','$hashpw', NULL, NULL, NULL) ";

        $result1 = $pdo->exec($query1);

        header("location:index.php");
    }
} catch (PDOException $e) {
    if ($e->errorInfo[1] == 1062) { // Check if the error is due to duplicate entry
        // Redirect back to index.php with an error message
        header("Location: index.php?error=email_already_used");
        exit();
    } else {
        // Handle other types of errors if necessary
        echo "Error: " . $e->getMessage();
    }
}
