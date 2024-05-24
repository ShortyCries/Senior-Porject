<?php
require_once("config.php");

try {
  if (isset($_POST['email'], $_POST['password'])) {
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    extract($_POST);

    $hashpw = md5($password);

    $query = "SELECT * FROM login WHERE email = ? AND password = ? AND status = 'active'";

    $result = $pdo->prepare($query);
    $result->bindValue(1, $email);
    $result->bindValue(2, $hashpw);

    // Execute the prepared statement
    if ($result->execute()) {
      $row = $result->fetch();

      if ($row) {
        // Successful login
        session_start();
        $_SESSION['Logged'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['name'];

        // Redirect based on user type
        switch ($row['Type']) {
          case 'player':
            header("location:PlayerPage.php");
            break;
          case 'coach':
            header("location:CoachPage.php");
            break;
          case 'academy':
            header("location:AcademyPage.php");
            break;
          case 'admin':
            header("location:adminPage.php");
            break;
          default:
            // Handle unexpected user type
            session_destroy();
            header("location:login.php");
            break;
        }
      } else {
        // Wrong email or password
        session_start();
        $_SESSION['logstatus'] = 'Wrong email or password!';
        header("location:login.php");
      }
    } else {
      // Error executing query
      session_start();
      $_SESSION['logstatus'] = 'Error executing query!';
      header("location:login.php");
    }
  }

  $pdo = null;
} catch (PDOException $e) {
  $_SESSION['logstatus'] = 'Error executing query!';
  header("location:login.php");
}
