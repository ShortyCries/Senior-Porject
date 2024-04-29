<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];

$query = "SELECT name, email, DOB, description FROM player ";

$result = $pdo->query($query);

$r = $result->rowCount();


?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>

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
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="mycss/styles.css">
  </head>
</head>

<body class="u-body u-xl-mode" data-lang="en">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Playerpage.php" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" target="_blank" style="padding: 10px 20px;">About us</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" target="_blank" style="padding: 10px 20px;">Contact </a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-player.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a>
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
      <a href="Academypage.php" class="u-image u-logo u-image-1" data-image-width="498" data-image-height="102">
        <img src="img/2-1.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>


  <div class="mybackground-img">

    <div class="container">

      <div class="box-container">
        <a href="player-games.php">
          <div class="box games-box" id="box1">
            <div class="img-container">
              <img class="img" src="/img/games-.png" alt="" id="img1">

            </div>
            <p>Games</p>
          </div>
        </a>
        <a href="player-academies.php">
          <div class="box academies-box" id="box2">
            <div class="img-container">
              <img class="img" src="/img//academy-.png" alt="" id="img2">

            </div>
            <p>Academies</p>
          </div>
        </a>
        <!-- <div class="box" id="box3">
                     <div class="img">
                         <img class="img" src="/img/volleyball-.jpg" alt="" id="img3">

                     </div>
                     <p></p>
                 </div> -->
        <a href="player-class.php">
          <div class="box class-box" id="box3">
            <div class="img">
              <img class="img" src="/img/classes-.png" alt="" id="img3">

            </div>
            <p>Class</p>
          </div>
        </a>
        <a href="player-players.php">
          <div class="box players-box" id="box4" style="background-color: grey;">
            <div class="img">
              <img class="img" src="/img/player-.png" alt="" id="img4">
            </div>
            <p>Players</p>
          </div>
        </a>
        <a href="player-coaches.php" style="text-decoration: none;">
          <div class="box coaches-box" id="box5">
            <div class="img">
              <img class="img" src="/img/coach-.png" alt="" id="img5">

            </div>
            <p>Coaches</p>
          </div>
        </a>
      </div>

    </div>
  </div>


  <div class="mybackground-img2">
    <div class="container-Listing">

      <h1 class="heading-Listing">Players</h1>

      <div class="box-container-Listing">
        q




        <?php for ($i = 0; $i < $r; $i++) {
          $row = $result->fetch(PDO::FETCH_NUM);
        ?>

          <div class="box-Listing">
            <div class="image-Listing">
              <img src="img/profiletest.jpg" alt="">
            </div>
            <div class="content-Listing">

              <h3><?php echo $row[0] ?></h3>


              <p class="user_email"><?php echo $row[1] ?></p>

              <a href="#" type="button" class="btn btn-success view_data" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Read More
              </a>
              <a href="#" type="button" onclick="getdata()" class="btn btn-warning Invite_Player" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Invite
              </a>

              <div class="icons-Listing">

              </div>
            </div>
          </div>


        <?php
        }
        ?>





        <!-- READ MORE MODEL -->
        <div class="modal fade" id="viewusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Player Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="view_user_data">

                </div>

              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>

        <!-- READ MORE MODEL -->



        <div class="modal fade" id="viewinvitemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="player-invite.php" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="myheader"></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <label>Choose class</label>
                  <select name="classname" class="form-select" required>
                    <option selected disabled value="">Choose...</option>

                    <?php
                    $query1 = "SELECT id, cname From class where playeremail = '$playerEmail'";

                    $result1 = $pdo->query($query1);

                    $r1 = $result1->rowCount();

                    for ($i = 0; $i < $r1; $i++) {
                      $row1 = $result1->fetch(PDO::FETCH_NUM);

                      echo "<option>$row1[0] | $row1[1]</option>";
                    }



                    ?>

                  </select>

                  <input type="hidden" id="dataInput" name="playeremail" value="">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Invite</button>
                </div>


              </form>
            </div>
          </div>
        </div>










      </div>

      <div id="load-more"> load more </div>

    </div>

    <script>
      let loadMoreBtn = document.querySelector('#load-more');
      let currentItem = 4;

      loadMoreBtn.onclick = () => {
        let boxes = [...document.querySelectorAll('.container-Listing .box-container-Listing .box-Listing')];
        for (var i = currentItem; i < currentItem + 4; i++) {
          boxes[i].style.display = 'inline-block';
        }
        currentItem += 4;

        if (currentItem >= boxes.length) {
          loadMoreBtn.style.display = 'none';
        }
      }
    </script>


  </div>













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
    var newSrc5 = '/img/gifs/coach-.gif';


    box5.addEventListener('mouseover', function() {
      img5.src = newSrc5;
    })

    box5.addEventListener('mouseout', function() {
      img5.src = originalsrc5;
    })


    //BOX6
    var img6 = document.getElementById('img5');
    var box6 = document.getElementById('box6');


    var originalsrc6 = img6.src;
    var newSrc6 = '/img/gifs/coaches-.gif';


    box6.addEventListener('mouseover', function() {
      img6.src = newSrc6;
    })

    box6.addEventListener('mouseout', function() {
      img6.src = originalsrc6;
    })
  </script>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function() {

      $('.view_data').click(function(e) {
        e.preventDefault();

        var user_email = $(this).closest('div').find('.user_email').text();

        $.ajax({
          method: "POST",
          url: "player-info.php",
          data: {
            'click_readmore_btn': true,
            'player_email': user_email,
          },
          success: function(response) {

            $('.view_user_data').html(response);
            $('#viewusermodal').modal('show');

          }

        });

      });


    });
  </script>

  <script>
    $(document).ready(function() {

      $('.Invite_Player').click(function(e) {
        e.preventDefault();

        var user_email = $(this).closest('div').find('.user_email').text();

        console.log(user_email);

        $.ajax({
          method: "POST",
          url: "player-info.php",
          data: {
            'click_invite_btn': true,
            'player_email': user_email,
          },
          success: function(response) {

            $('#myheader').html(response);
            $('#viewinvitemodal').modal('show');



          }

        });

      });


    });
  </script>


  <script>
    function getdata() {
      // Get the element by ID

      setTimeout(function() {

        var element = document.getElementById('myheader');


        var innerHTMLContent = element.innerHTML;
        console.log("Inner HTML Content:", innerHTMLContent);


        document.getElementById('dataInput').value = innerHTMLContent;
      }, 100);

    }
  </script>






  <script>
    function logoutAlert() {
      // Show the confirmation dialog and store the result
      var result = window.confirm("Are you sure you want to Logout?");

      // Check if the user clicked "OK" or "Cancel"
      if (result) {
        // If the user clicked "OK", redirect to 'index.php'
        window.location.href = 'Logout.php';
      } else {
        // If the user clicked "Cancel", do nothing or perform any other action
        return;
      }
    }
  </script>






</body>


</html>