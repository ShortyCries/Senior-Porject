<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];


?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>academy-Academies</title>
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
        <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
        <link rel="stylesheet" href="mycss/styles.css">
        <link rel="stylesheet" href="mycss/Listing.css">
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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Academypage.php" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" target="_blank" style="padding: 10px 20px;">About us</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" target="_blank" style="padding: 10px 20px;">Contact </a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-academy.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a>
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
                <a href="academy-Classes.php" style="text-decoration: none;">
                    <div class="box" id="box1">
                        <div class="img-container">
                            <img class="img" src="/img/classes-.png" alt="" id="img1">

                        </div>
                        <p>Classes</p>
                    </div>
                </a>
                <a href="academy-Coaches.php" style="text-decoration: none;">
                    <div class="box" id="box2">
                        <div class="img">
                            <img class="img" src="/img/coach-.png" alt="" id="img2">

                        </div>
                        <p>Coaches</p>
                    </div>
                </a>
                <a href="academy-Games.php" style="text-decoration: none;">
                    <div class="box" id="box3">
                        <div class="img">
                            <img class="img" src="/img/games-.png" alt="" id="img3">

                        </div>
                        <p>Games</p>
                    </div>
                </a>
                <a href="academy-Courts.php" style="text-decoration: none;">
                    <div class="box" id="box4">
                        <div class="img">
                            <img class="img" src="/img/court.png" alt="" id="img4">

                        </div>
                        <p>Courts</p>
                    </div>
                </a>
                <a href="academy-Players.php" style="text-decoration: none;">
                    <div class="box" id="box5">
                        <div class="img">
                            <img class="img" src="/img/player-.png" alt="" id="img5">

                        </div>
                        <p>Players</p>
                    </div>
                </a>
                <a href="academy-Academies.php" style="text-decoration: none;">
                    <div class="box" id="box6" style="background-color: grey;">
                        <div class="img">
                            <img class="img" src="/img/academy-.png" alt="" id="img6">

                        </div>
                        <p>Academies</p>
                    </div>
                </a>

            </div>

        </div>

    </div>


    <div class="mybackground-img2">
        <div class="container-Listing">

            <h1 class="heading-Listing">Academies</h1>

            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="<?php if (isset($_GET['search'])) {
                                                                        echo $_GET['search'];
                                                                    } ?>" name="search" placeholder="search here...">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>


            <div class="box-container-Listing">

                <?php

                if (isset($_GET['search'])) {


                    $filterValue = $_GET['search'];
                    $filterData = "SELECT email, name, foundedIn, description  FROM academy WHERE CONCAT_WS(' ', email, name, foundedIn, description) LIKE '%$filterValue%';";
                    $result = $pdo->query($filterData);

                    $r = $result->rowCount();

                    if ($r > 0) {

                        foreach ($result as $row) {

                ?>

                            <div class="box-Listing">
                                <div class="image-Listing">
                                    <img src="img/profiletest.jpg" alt="">
                                </div>
                                <div class="content-Listing">

                                    <h3><?php echo $row[1] ?></h3>


                                    <p class="user_email"><?php echo $row[0] ?></p>

                                    <a href="#" type="button" class="btn btn-success view_data" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Read More
                                    </a>

                                    <div class="icons-Listing">

                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                    }
                } else {
                    $query1 = "SELECT email, name, foundedIn, description  FROM academy";
                    $result1 = $pdo->query($query1);
                    $r1 = $result1->rowCount();


                    if ($r1 > 0) {

                        foreach ($result1 as $row1) {

                        ?>




                            <div class="box-Listing">
                                <div class="image-Listing">
                                    <img src="img/profiletest.jpg" alt="">
                                </div>
                                <div class="content-Listing">

                                    <h3><?php echo $row1[1] ?></h3>


                                    <p class="user_email"><?php echo $row1[0] ?></p>

                                    <a href="#" type="button" class="btn btn-success view_data" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Read More
                                    </a>

                                    <div class="icons-Listing">

                                    </div>
                                </div>
                            </div>





                <?php
                        }
                    }
                }
                ?>





                <!-- READ MORE MODEL -->
                <div class="modal fade" id="viewusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Academy Info</h5>
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
        var newSrc = '/img/gifs/classes.gif';


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
        var newSrc2 = '/img/gifs/coach-.gif';


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
        var newSrc3 = '/img/gifs/games-.gif';


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
        var newSrc4 = '/img/gifs/court-.gif';


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
        var newSrc5 = '/img/gifs/player-.gif';


        box5.addEventListener('mouseover', function() {
            img5.src = newSrc5;
        })

        box5.addEventListener('mouseout', function() {
            img5.src = originalsrc5;
        })


        //BOX6
        var img6 = document.getElementById('img6');
        var box6 = document.getElementById('box6');


        var originalsrc6 = img6.src;
        var newSrc6 = '/img/gifs/academy-.gif';


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
                    url: "academy-info.php",
                    data: {
                        'click_readmore_btn': true,
                        'academy_email': user_email,
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



</body>


</html>