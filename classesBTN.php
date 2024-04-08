<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];

$query = "SELECT name, email, DOB FROM coach NATURAL JOIN trains WHERE email = coachemail AND academyemail = '$academyEmail' ";

$result = $pdo->query($query);

$r = $result->rowCount();

echo $r;


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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="mycss/styles.css">




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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Academypage.php" style="padding: 10px 20px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Logout</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="More.php" style="padding: 10px 20px;">More</a>
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
                <a href="classesBTN.php">
                    <div class="box" id="box1" style="background-color: grey;">
                        <div class="img-container">
                            <img class="img" src="/img/classes-.png" alt="" id="img1">

                        </div>
                        <p>Classes</p>
                    </div>
                </a>
                <a href="CoachesBTN.php">
                    <div class="box" id="box2" >
                        <div class="img">
                            <img class="img" src="/img/coach-.png" alt="" id="img2">

                        </div>
                        <p>Coaches</p>
                    </div>
                </a>
                <a href="GamesBTN.php">
                    <div class="box" id="box3">
                        <div class="img">
                            <img class="img" src="/img/games-.png" alt="" id="img3">

                        </div>
                        <p>Games</p>
                    </div>
                </a>
                <a href="courtsBTN.php">
                    <div class="box" id="box4">
                        <div class="img">
                            <img class="img" src="/img/court.png" alt="" id="img4">

                        </div>
                        <p>Courts</p>
                    </div>
                </a>
                <a href="PlayersBTN.php">
                    <div class="box" id="box5">
                        <div class="img">
                            <img class="img" src="/img/player-.png" alt="" id="img5">

                        </div>
                        <p>Players</p>
                    </div>
                </a>
                <a href="AcademiesBTN.php">
                    <div class="box" id="box6">
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
        <h2 style="text-align: center; color: orange;">Add coach</h2>

        <form class="row g-3" style="padding-left: 300px; padding-right: 300px;" action="CoachPDO.php" method="POST">

            <div class="col-md-4">
                <label for="validationDefault01" class="form-label" style="color: orange;">Name</label>
                <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Mark" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label" style="color: orange;">Password</label>
                <input name="password" type="text" class="form-control" id="validationDefault02" placeholder="Password" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label" style="color: orange;">Re-password</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Re-password" required>
            </div>

            <div class="col-md-5">
                <label for="validationDefaultUsername" class="form-label" style="color: orange;">Email</label>
                <div class="input-group">
                    <span style="background-color:orange;  border-color: orange;" class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input name="email" type="text" class="form-control" id="validationDefaultUsername" placeholder="example123@hotmail.com" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label" style="color: orange;">Sport Speciality</label>
                <select name="sport" class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Football</option>
                    <option>Basketball</option>
                    <option>Volleyball</option>
                    <option>Tennis</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="validationDefault05" class="form-label">Date of Birth</label>
                <input type="date" class="form-control date-picker" name="Dob" placeholder="Date of birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of birth'">
            </div>

            <div class="col-12" style="text-align: center; padding-top: 30px; color: yellow;">
                <button style="background-color: orange; border-color: orange;" class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>

    <div class="mybackground-img">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">

                        <div class="card-header">
                            <h4 class="display-6 text-center"> Coach List </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Date of birth</td>

                                </tr>
                                <?php
                                for ($i = 0; $i < $r; $i++) {
                                    $row = $result->fetch(PDO::FETCH_NUM);
                                    echo "<tr>";
                                    echo "<td>   $row[0] </td>";
                                    echo "<td>   $row[1] </td> ";
                                    echo "<td>  $row[2] </td> ";
                                    
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>
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