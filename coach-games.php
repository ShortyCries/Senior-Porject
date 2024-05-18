<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

$coachEmail =  $_SESSION['email'];

$query = "SELECT academyemail FROM trains WHERE coachemail ='$coachEmail'";

$result = $pdo->query($query);

$academyEmail = $result->fetch(PDO::FETCH_COLUMN);





?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Page 2</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <link rel="stylesheet" href="css/nav.css" media="screen">
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
  <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
  <link rel="stylesheet" href="mycss/styles.css">
  <link rel="stylesheet" href="mycss/Listing.css">
</head>

<body class="u-body u-xl-mode" data-lang="en">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Coachpage.php" style="padding: 10px 20px; color: white !important;">Home</a>
            </li>
            <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" style="padding: 10px 20px;">About us</a>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" target="_blank" style="padding: 10px 20px;">Contacts</a>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-coach.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a>
            </li>
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
      <p style="border-left: solid; padding-left: 30px;" class="u-align-center u-text u-text-default u-text-1"><?php echo "" . $_SESSION['name'] . "" ?></p>
      <a href="CoachPage.php" class="u-image u-logo u-image-1" data-image-width="498" data-image-height="102">
        <img src="img/2-1.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>


  <div class="mybackground-img">

    <div class="container">

      <div class="box-container">
        <a href="coach-games.php#coach-games" style="text-decoration: none;">
          <div class="box games-box" id="box1" style="background-color: grey;">
            <div class="img-container">
              <img class="img" src="/img/games-.png" alt="" id="img1">

            </div>
            <p>Games</p>
          </div>
        </a>
        <a href="coach-academies.php#coach-academies" style="text-decoration: none;">
          <div class="box academies-box" id="box2">
            <div class="img">
              <img class="img" src="/img/academy-.png" alt="" id="img2">

            </div>
            <p>Academies</p>
          </div>
        </a>
      </div>
      <div class="box-container">
        <!-- <div class="box" id="box3">
                     <div class="img">
                         <img class="img" src="/img/volleyball-.jpg" alt="" id="img3">

                     </div>
                     <p>Class</p>
                 </div> -->
        <a href="coach-class.php#coach-class" style="text-decoration: none;">
          <div class="box" id="box3">
            <div class="img">
              <img class="img" src="/img/classes-.png" alt="" id="img3">

            </div>
            <p>Class</p>
          </div>
        </a>
        <a href="coach-players.php#coach-players" style="text-decoration: none;">
          <div class="box" id="box4">
            <div class="img">
              <img class="img" src="/img/player-.png" alt="" id="img4">

            </div>
            <p>Players</p>
          </div>
        </a>
      </div>


    </div>
  </div>


  <div class="mybackground-img2">
  <span id="coach-games">
            <!-- Content of the target section -->
            <span>
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-12">




          <div class="card">
            <div class="card-header">
              <h4 class="text-center">Matches</h4>
              <input id="searchInput" type="text" class="form-control float-start" placeholder="Search..." style="width: 200px;">
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table id="table2" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Team1</th>
                      <th scope="col">Team2</th>
                      <th scope="col">Court</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php

                    $query3 =  "SELECT matchs.Mid AS MatchID, c1.Cname AS Team1Name, c2.Cname AS Team2Name, courts.CRname AS CourtName, matchs.Mdate AS MatchDate, matchs.Mtime AS MatchTime FROM matchs JOIN class AS c1 ON matchs.team1 = c1.id JOIN class AS c2 ON matchs.team2 = c2.id JOIN courts ON matchs.McourtId = courts.CRid WHERE courts.CRAcademyemail = '$academyEmail' AND matchs.Mtype = 'local';";
                    $result3 = $pdo->query($query3);

                    $r3 = $result3->rowCount();

                    for ($i = 0; $i < $r3; $i++) {
                      $row3 = $result3->fetch(PDO::FETCH_NUM);
                    ?>
                      <tr class="myRows">
                        <td id="myclassid"><?php echo  $row3[0] ?></td>
                        <td><?php echo  $row3[1] ?></td>
                        <td><?php echo  $row3[2] ?></td>
                        <td><?php echo  $row3[3] ?></td>
                        <td><?php echo $row3[4] ?></td>
                        <td><?php echo $row3[5] ?></td>

                      </tr>
                    <?php
                    }
                    ?>



                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
























  <script>
    function logoutAlert() {
      // Show the confirmation dialog and store the result
      var result = window.confirm("Are you sure you want to Logout?");

      // Check if the user clicked "OK" or "Cancel"
      if (result) {
        // If the user clicked "OK", redirect to 'index.php'
        window.location.href = 'logout.php';
      } else {
        // If the user clicked "Cancel", do nothing or perform any other action
        return;
      }
    }
  </script>

  <script>
    //BOX1
    var img = document.getElementById('img1');
    var box = document.getElementById('box1');



    var originalsrc = img.src;
    var newSrc = '/img/gifs/games-.gif';


    box.addEventListener('mouseover', function() {
      img.src = newSrc;
    })

    box.addEventListener('mouseout', function() {
      img.src = originalsrc;
    })




    //BOX2
    var img2 = document.getElementById('img2');
    var box2 = document.getElementById('box2');


    var originalsrc2 = img2.src;
    var newSrc2 = '/img/gifs/academy-.gif';


    box2.addEventListener('mouseover', function() {
      img2.src = newSrc2;
    })

    box2.addEventListener('mouseout', function() {
      img2.src = originalsrc2;
    })





    //BOX3
    var img3 = document.getElementById('img3');
    var box3 = document.getElementById('box3');


    var originalsrc3 = img3.src;
    var newSrc3 = '/img/gifs/classes.gif';


    box3.addEventListener('mouseover', function() {
      img3.src = newSrc3;
    })

    box3.addEventListener('mouseout', function() {
      img3.src = originalsrc3;
    })


    //BOX4
    var img4 = document.getElementById('img4');
    var box4 = document.getElementById('box4');


    var originalsrc4 = img4.src;
    var newSrc4 = '/img/gifs/player-.gif';


    box4.addEventListener('mouseover', function() {
      img4.src = newSrc4;
    })

    box4.addEventListener('mouseout', function() {
      img4.src = originalsrc4;
    })


    //BOX5
    var img5 = document.getElementById('img5');
    var box5 = document.getElementById('box5');


    var originalsrc5 = img5.src;
    var newSrc5 = '/img/gifs/volleyball-.gif';


    box5.addEventListener('mouseover', function() {
      img5.src = newSrc5;
    })

    box5.addEventListener('mouseout', function() {
      img5.src = originalsrc5;
    })


    //BOX3
    var img6 = document.getElementById('img6');
    var box6 = document.getElementById('box6');


    var originalsrc6 = img6.src;
    var newSrc6 = '/img/gifs/volleyball-.gif';


    box6.addEventListener('mouseover', function() {
      img6.src = newSrc6;
    })

    box6.addEventListener('mouseout', function() {
      img6.src = originalsrc6;
    })
  </script>



<script>
    
    document.addEventListener("DOMContentLoaded", function() {
           var search_input = document.getElementById("searchInput");
           var table2 = document.getElementById("table2");
           var num_of_rows = table2.getElementsByClassName("myRows");

           search_input.addEventListener('keyup', function(){
            var search_value = search_input.value.toLowerCase();
            for(let i = 0; i < num_of_rows.length; i++){
                var data_cells = num_of_rows[i].getElementsByTagName('td');
                let found = false;

                for(let j = 0; j < data_cells.length; j++){
                    var cellText = data_cells[j].textContent.toLowerCase();
                    if(cellText.includes(search_value)){
                        found = true;
                        break;
                    }
                }
                if(found){
                    num_of_rows[i].style.display = "";
                } else {
                    num_of_rows[i].style.display = "none";
                }
            }
           })
        });

    
    </script>
</body>

</html>