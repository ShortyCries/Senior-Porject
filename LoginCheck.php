<?php
require_once("config.php");

try {
  if (isset($_POST['email'], $_POST['password'])) {
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    extract($_POST);




    $query = "SELECT * FROM login where email ='$email' AND  password = '$password'";




    $result = $pdo->query($query);

    $r = $result->rowCount(); // == 1

    if ($r == 1) {
      session_start();
      $_SESSION['email'] = $email;
      $row = $result->fetch();
      if ($row['Type'] == "player") {
       
        header("location:PlayerPage.php");

      } else if ($row['Type'] == "coach") {

        header("location:CoachPage.php");

      } else if ($row['Type'] == "academy") {

        header("location:AcademyPage.php");
      }
    }
  }

  $pdo = null;
} catch (PDOException $e) {
  die($e->getMessage());
}
?>

<html>

<head>



</head>

<body>


</body>



</html>