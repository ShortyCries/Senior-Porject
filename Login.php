<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/Login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">

      </div>

      <!-- Login Form -->
      <form action="LoginCheck.php" style="margin-top: 35px;" method="post">
        <input 10px; type="text" id="login" class="fadeIn second hi" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '">
        <input type="password" id="password" class="fadeIn third hi" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password '">
        <?php

        if (isset($_SESSION['logstatus']) && $_SESSION['logstatus'] != '') {
        ?>
          <div style="color: red;">
            <?php echo $_SESSION['logstatus']; ?>
          </div>
        <?php
          unset($_SESSION['logstatus']);
        }


        ?>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="index.php">Dont have an Acount?</a>
      </div>

    </div>
  </div>

</body>

</html>