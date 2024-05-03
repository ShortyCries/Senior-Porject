<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$playerEmail = $_SESSION['email'];

$query = "SELECT email, name, description, phone FROM player WHERE email = '$playerEmail'";

$result = $pdo->query($query);

$r = $result->fetch(PDO::FETCH_NUM);




?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>academy-Player</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
  <script src="bootstrap5/jsbt5/bootstrap.bundle.min.js"> </script>
  <meta name="generator" content="Nicepage 6.7.6, nicepage.com">



  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/2-1.png"
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Page 2">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap5/cssbt5//bootstrap.css">
  <link rel="stylesheet" href="mycss/profile.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>



<body class="u-body u-xl-mode" style="background-image: url('/img/1319754.jpeg');" class="">
  <header class="u-clearfix u-custom-color-1 u-header u-sticky u-header" id="sec-1576">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="PlayerPage.php" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" style="padding: 10px 20px;">Contact</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" style="padding: 10px 20px;">About us</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-player.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Logout.html">Logout</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="More.html">More</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <p style="border-left: solid; padding-left: 30px;" class="u-align-center u-text u-text-default u-text-1"><?php echo $r[1]; ?></p>
      <a href="PlayerPage.php" class="u-image u-logo u-image-1" data-image-width="498" data-image-height="102">
        <img src="img/2-1.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>





  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 style="color: white;" class="h3 mb-4 page-title">Settings</h2>
        <div class="my-4">
          <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
              <a style="font-weight: bold; color:black" class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="false">Profile</a>
            </li>
          </ul>

          <!--START OF FORM -->
          <form action="Update-Profile-player.php" method="POST" id="EditForm">
            <div class="row mt-5 align-items-center">
              <div class="col-md-3 text-center mb-5">
                <div class="avatar avatar-xl">
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                </div>
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-7">
                    <h2 style="font-weight: bold; color:green" class="mb-1"><?php echo $r[1]; ?></h2>
                    <h3 style="font-weight: bold; color:green" class="small mb-3"><span class="badge badge-dark"><?php echo $r[0]; ?></span></h3>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-7">
                    <p class="text-muted">
                    </p>
                  </div>

                </div>
              </div>
            </div>
            <hr class="my-4" />
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputEmail4">Name</label>
              <input name="name" type="text" class="form-control" id="realname" placeholder="<?php echo $r[1]; ?>" />
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputEmail4">Description</label>
              <textarea name="description" style="height:150px;" type="text" class="form-control" id="realdescription" placeholder="<?php echo $r[2]; ?>"></textarea>
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputEmail4">Phone Number</label>
              <input name="phone" type="number" class="form-control" id="realphone" placeholder="<?php echo $r[3]; ?>" />
            </div>
            <div class="row">
              <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Save Change</button>
              </div>
            </div>
          </form>
          <hr class="my-4" />
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label style="font-weight: bold; color:white" for="inputPassword4">Old Password</label>
                <input type="password" class="form-control" id="inputPassword5" placeholder="check old password if tru" />
              </div>
              <div class="form-group">
                <label style="font-weight: bold; color:white" for="inputPassword5">New Password</label>
                <input type="password" class="form-control" id="inputPassword5" />
              </div>
              <div class="form-group">
                <label style="font-weight: bold; color:white" for="inputPassword6">Confirm Password</label>
                <input type="password" class="form-control" id="inputPassword6" />
              </div>
            </div>
            <div class="col-md-6">
              <p style="font-weight: bold; color:white" class="mb-2">Password requirements</p>
              <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
              <ul class="small text-muted pl-4 mb-0">
                <li>Minimum 8 character</li>
                <li>At least one special character</li>
                <li>At least one number</li>
                <li>Can’t be the same as a previous password</li>
              </ul>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Save Password</button>

          <!--END OF FORM -->
        </div>
      </div>
    </div>

  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {



      document.getElementById("EditForm").addEventListener("submit", function(event) {

        var name = document.getElementById("realname");
        var description = document.getElementById("realdescription");
        var phone = document.getElementById("realphone");

        if (name.value === "") {
          name.value = name.placeholder;
        }

        if (description.value === "") {
          description.value = description.placeholder;
        }

        if (phone.value === "") {
          phone.value = phone.placeholder;
        }







      });
    });
  </script>


</body>

</html>