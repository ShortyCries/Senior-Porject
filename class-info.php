<?php

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

if (isset($_GET['testingemail'])) {
    $testingemail = $_GET['testingemail'];
    $delete1 = "DELETE FROM joins WHERE playeremail = '$testingemail' ";
    $delResult1 = $pdo->exec($delete1);

    header("location:academy-Classes.php");

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
    <link rel="stylesheet" href="mycss/styles.css">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script src="bootstrap5/jsbt5/bootstrap.bundle.min.js"> </script>
</head>
<body>
    

<?php



if (isset($_POST['click_view_class_btn'])) {
    $class_id = $_POST['class_id'];


    $query = "SELECT name, email, DOB from joins NATURAL JOIN player where classid = '$class_id' AND status = 'accepted' AND email = playeremail";

    $result = $pdo->query($query);

    $r = $result->rowCount();


    for ($i = 0; $i < $r; $i++) {
        $row = $result->fetch(PDO::FETCH_NUM); 

        echo '<h6>' . $row[0] . '</h6>';
        echo '<h6>' . $row[2] . '</h6>';

       echo " <a href='class-info.php?testingemail={$row[1]}'  class='btn btn-danger'> Remove </a> ";

      
    }



    

}


?>




</body>
</html>


