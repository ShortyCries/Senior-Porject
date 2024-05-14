<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];

$query = "SELECT name, email, DOB FROM coach NATURAL JOIN trains WHERE email = coachemail AND academyemail = '$academyEmail' ";

$result = $pdo->query($query);

$r = $result->rowCount();



?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>GamesBTN</title>
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



    <style>
        td {
            text-align: center;
        }

        tr {
            text-align: center;
        }
    </style>


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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Academypage.php" style="padding: 10px 20px; ">Home</a>
                        </li>
                        <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" target="_blank" style="padding: 10px 20px;">About us</a>
                        </li>

                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" target="_blank" style="padding: 10px 20px;">Contact </a>
                        </li>
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-academy.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a> </li>
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
                    <div class="box" id="box3"">
                        <div class=" img">
                        <img class="img" src="/img/games-.png" alt="" id="img3">

                    </div>
                    <p>Games</p>
            </div>
            </a>
            <a href="academy-Courts.php" style="text-decoration: none;">
                <div class="box" id="box4" style="background-color: grey;">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <?php

                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {


                    ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Nice!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php
                        unset($_SESSION['status']);
                    }




                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Courts</h4>
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                                New Court
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Sport</th>
                                            <th scope="col">Capacity</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        $query3 =  "SELECT CRid, CRname, CRsportname, CRmaxcapacity FROM courts WHERE CRacademyemail = '$academyEmail'";
                                        $result3 = $pdo->query($query3);

                                        $r3 = $result3->rowCount();

                                        for ($i = 0; $i < $r3; $i++) {
                                            $row3 = $result3->fetch(PDO::FETCH_NUM);
                                        ?>
                                            <tr>
                                                <td id="mycourtid"><?php echo  $row3[0] ?></td>
                                                <td><?php echo  $row3[1] ?></td>
                                                <td><?php echo  $row3[2] ?></td>
                                                <td><?php echo  $row3[3] ?></td>
                                                <td> <a href="#" type="button" class="btn btn-primary set_schedule" data-bs-toggle="modal" data-bs-target="#setSchedulemodal">
                                                        Set Schedule
                                                    </a> </td>
                                                <td> <a href="#" class="btn btn-danger">Remove</a> </td>
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


        <div class="modal fade" id="setSchedulemodal" tabindex="-1" aria-labelledby="setSchedulemodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="setSchedulemodalLabel">Set Schedule</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group mb-3">
                                    <select id="theDay" name="day" class="form-select" required>
                                        <option value="Monday"> Monday </option>
                                        <option value="Tuesday"> Tuesday </option>
                                        <option value="Wednesday"> Wednesday </option>
                                        <option value="Thursday"> Thursday </option>
                                        <option value="Friday"> Friday </option>
                                        <option value="Saturday"> Saturday </option>
                                        <option value="Sunday"> Sunday </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <button type="button" id="slot" class="btn btn-success">+Slot</button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div id="monday">
                                <form action="#" method="POST" id="mondaySchedule">

                                    <input type="hidden" name="courtIdSch" id="mon_court_hidden">
                                    <input type="hidden" name="DaySch" id="mon_day_hidden">

                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>
                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>
                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>

                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="mondaySlot">

                                    </div>
                                    <span id="saveResultMon"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success" id="mon_save_btn">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="tuesday">
                                <form action="#" method="POST" id="tuesdaySchedule">
                                    <input type="hidden" name="courtIdSch" id="tues_court_hidden">
                                    <input type="hidden" name="DaySch" id="tues_day_hidden">

                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>
                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="tuesdaySlot">

                                    </div>
                                    <span id="saveResultTues"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="wednesday">
                                <form action="#" method="POST" id="wednesdaySchedule">
                                    <input type="hidden" name="courtIdSch" id="wed_court_hidden">
                                    <input type="hidden" name="DaySch" id="wed_day_hidden">

                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="wednesdaySlot">

                                    </div>
                                    <span id="saveResultWed"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="thursday">
                                <form action="#" method="POST" id="thursdaySchedule">
                                    <input type="hidden" name="courtIdSch" id="thur_court_hidden">
                                    <input type="hidden" name="DaySch" id="thur_day_hidden">
                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="thursdaySlot">

                                    </div>
                                    <span id="saveResultThur"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="friday">
                                <form action="#" method="POST" id="fridaySchedule">
                                    <input type="hidden" name="courtIdSch" id="fri_court_hidden">
                                    <input type="hidden" name="DaySch" id="fri_day_hidden">
                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="fridaySlot">

                                    </div>
                                    <span id="saveResultFri"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="saturday">
                                <form action="#" method="POST" id="saturdaySchedule">
                                    <input type="hidden" name="courtIdSch" id="sat_court_hidden">
                                    <input type="hidden" name="DaySch" id="sat_day_hidden">
                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="saturdaySlot">

                                    </div>
                                    <span id="saveResultSat"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                            <div id="sunday">
                                <form action="#" method="POST" id="sundaySchedule">
                                    <input type="hidden" name="courtIdSch" id="sun_court_hidden">
                                    <input type="hidden" name="DaySch" id="sun_day_hidden">


                                    <select name="startHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="startMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    -
                                    <select name="endHH[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">HH</option>

                                        <?php
                                        for ($i = 0; $i <= 23; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    :
                                    <select name="endMM[]" id="" style="appearance: none;  border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
                                        <option selected disabled value="">MM</option>
                                        <?php
                                        for ($i = 0; $i <= 59; $i++) {
                                            $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
                                            echo "<option value=\"$hour\">$hour</option>";
                                        }
                                        ?>
                                    </select>
                                    <div id="sundaySlot">

                                    </div>
                                    <span id="saveResultSun"> </span>
                                    <div class="text-center mt-2">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>




                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>




    <script>
        $(document).ready(function() {

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.DELETABLETIMESLOT').remove();
            });



            $(document).on('click', '#slot', function() {

                $.ajax({
                    url: 'generate_slot.php',
                    method: 'GET',
                    success: function(response) {
                        if ($('#theDay').val() === 'Monday') {
                            $('#mondaySlot').append(response);
                        } else if ($('#theDay').val() === 'Tuesday') {
                            $('#tuesdaySlot').append(response);
                        } else if ($('#theDay').val() === 'Wednesday') {
                            $('#wednesdaySlot').append(response);
                        } else if ($('#theDay').val() === 'Thursday') {
                            $('#thursdaySlot').append(response);
                        } else if ($('#theDay').val() === 'Friday') {
                            $('#fridaySlot').append(response);
                        } else if ($('#theDay').val() === 'Saturday') {
                            $('#saturdaySlot').append(response);
                        } else if ($('#theDay').val() === 'Sunday') {
                            $('#sundaySlot').append(response);
                        }
                    }
                });

            });



            $('#mondaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultMon').html(response);
                    }
                });
            });

            $('#tuesdaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultTues').html(response);
                    }
                });
            });

            $('#wednesdaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultWed').html(response);
                    }
                });
            });

            $('#thursdaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultThur').html(response);
                    }
                });
            });

            $('#fridaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultFri').html(response);
                    }
                });
            });


            $('#saturdaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultSat').html(response);
                    }
                });
            });

            $('#sundaySchedule').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'save-schedule.php',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#saveResultSun').html(response);
                    }
                });
            });






        });
    </script>
    <script>
        const theday = document.getElementById("theDay");
        const Mondaydiv = document.getElementById("monday");
        const Tuesdaydiv = document.getElementById("tuesday");
        const Wednesdaydiv = document.getElementById("wednesday");
        const Thursdaydiv = document.getElementById("thursday");
        const Fridaydiv = document.getElementById("friday");
        const Saturdaydiv = document.getElementById("saturday");
        const Sundaydiv = document.getElementById("sunday");

        document.addEventListener("DOMContentLoaded", function(event) {
            Mondaydiv.style.display = "block";
            Tuesdaydiv.style.display = "none";
            Wednesdaydiv.style.display = "none";
            Thursdaydiv.style.display = "none";
            Fridaydiv.style.display = "none";
            Saturdaydiv.style.display = "none";
            Sundaydiv.style.display = "none";
        });

        theday.addEventListener("change", function(event) {

            if (event.target.value == 'Monday') {
                Mondaydiv.style.display = "block";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Tuesday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "block";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Wednesday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "block";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Thursday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "block";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Friday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "block";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Saturday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "block";
                Sundaydiv.style.display = "none";
            } else if (event.target.value == 'Sunday') {
                Mondaydiv.style.display = "none";
                Tuesdaydiv.style.display = "none";
                Wednesdaydiv.style.display = "none";
                Thursdaydiv.style.display = "none";
                Fridaydiv.style.display = "none";
                Saturdaydiv.style.display = "none";
                Sundaydiv.style.display = "block";
            }
        })
    </script>


    <!-- Modal -->
    <div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertdataLabel">Add new court</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="CourtPDO.php" method="POST">
                    <div class="modal-body">


                        <div class="form-group mb-3">
                            <label>Court name</label>
                            <input name="courtname" type="text" class="form-control" placeholder="Enter court name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Location</label>
                            <select name="city" class="form-select" required>
                                <option selected disabled value="">Choose...</option>

                                <option> Beirut </option>
                                <option> Sidon </option>
                                <option> Tripoli </option>
                                <option> Barr Elias </option>
                                <option> Nabatiye </option>
                                <option> Baalbak </option>

                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-floating">
                                <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Location description</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Choose sport</label>
                            <select name="sport" class="form-select" required>
                                <option selected disabled value="">Choose...</option>

                                <?php
                                $query1 = "SELECT sname From sport";

                                $result1 = $pdo->query($query1);

                                $r1 = $result1->rowCount();

                                for ($i = 0; $i < $r1; $i++) {
                                    $row1 = $result1->fetch(PDO::FETCH_NUM);

                                    echo "<option> $row1[0] </option>";
                                }



                                ?>


                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Size:</label>
                            <input name="size1" type="number" placeholder="width" style="border:solid; " required> X
                            <input name="size2" type="number" placeholder="hieght" style="border:solid; " required> m
                        </div>

                        <div class="form-group mb-3">
                            <label>Privacy Preference</label>
                            <select name="CRtype" class="form-select" required>
                                <option>private</option>
                                <option>public </option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Max number of players</label>
                            <input id="maxcapacity" name="maxcapacity" type="number" placeholder="(optional)" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label>Price($)</label>
                            <input id="price" name="price" type="number" placeholder="(optional)" class="form-control">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>











    <script>
        $(document).ready(function() {

            $('#mon_day_hidden').val($('#theDay').val());

            $('.set_schedule').click(function(e) {
                e.preventDefault();
                console.log('hello');
                var court_id = $(this).closest('tr').find('#mycourtid').text();


                console.log(court_id);

                $('#mon_court_hidden').val(court_id);
                $('#tues_court_hidden').val(court_id);
                $('#wed_court_hidden').val(court_id);
                $('#thur_court_hidden').val(court_id);
                $('#fri_court_hidden').val(court_id);
                $('#sat_court_hidden').val(court_id);
                $('#sun_court_hidden').val(court_id);


            });

            $('#theDay').change(function() {
                var selectedValue = $(this).val();

                $('#mon_day_hidden').val(selectedValue);
                $('#tues_day_hidden').val(selectedValue);
                $('#wed_day_hidden').val(selectedValue);
                $('#thur_day_hidden').val(selectedValue);
                $('#fri_day_hidden').val(selectedValue);
                $('#sat_day_hidden').val(selectedValue);
                $('#sun_day_hidden').val(selectedValue);
            });


        });
    </script>





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