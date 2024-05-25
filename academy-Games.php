<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$academyEmail = $_SESSION['email'];






if (isset($_GET['MatchID'], $_GET['cancelMatch'])) {

    $MATCHID = $_GET['MatchID'];
    $delete1 = "DELETE FROM matchs WHERE Mid = '$MATCHID'";
    $result1 = $pdo->exec($delete1);


    header("location:academy-Games.php");
}





if (isset($_GET['EVENTID'])) {

    $EVENTID = $_GET['EVENTID'];
    $delete = "DELETE FROM events WHERE Eid = '$EVENTID'";
    $result = $pdo->exec($delete);

    header("location:academy-Games.php");
}






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
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Academypage.php">Home</a>
                                </li>
                                <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link" href="#">Logout</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="contact.php">Contact</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" target="_blank" href="about.php">About us</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Edit-Profile-academy.php">Edit Profile</a>
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
                <a href="academy-Classes.php#academy-classes" style="text-decoration: none;">
                    <div class="box" id="box1">
                        <div class="img-container">
                            <img class="img" src="/img/classes-.png" alt="" id="img1">

                        </div>
                        <p>Classes</p>
                    </div>
                </a>
                <a href="academy-Coaches.php#academy-coaches" style="text-decoration: none;">
                    <div class="box" id="box2">
                        <div class="img">
                            <img class="img" src="/img/coach-.png" alt="" id="img2">

                        </div>
                        <p>Coaches</p>
                    </div>
                </a>
                <a href="academy-Games.php#academy-games" style="text-decoration: none;">
                    <div class="box" id="box3" style="background-color: grey;">
                        <div class="img">
                            <img class="img" src="/img/games-.png" alt="" id="img3">

                        </div>
                        <p>Games</p>
                    </div>
                </a>
                <a href="academy-Courts.php#academy-courts" style="text-decoration: none;">
                    <div class="box" id="box4">
                        <div class="img">
                            <img class="img" src="/img/court.png" alt="" id="img4">

                        </div>
                        <p>Courts</p>
                    </div>
                </a>
                <a href="academy-Players.php#academy-players" style="text-decoration: none;">
                    <div class="box" id="box5">
                        <div class="img">
                            <img class="img" src="/img/player-.png" alt="" id="img5">

                        </div>
                        <p>Players</p>
                    </div>
                </a>
                <a href="academy-Academies.php#academy-academies" style="text-decoration: none;">
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
        <span id="academy-games">
            <!-- Content of the target section -->
            <span>
                <div class="container">
                    <nav>
                        <div class="nav nav-tabs justify-content-center mb-5" id="nav-tab" role="tablist">
                            <button class="nav-link active text-dark" id="nav-local-tab" data-bs-toggle="tab" data-bs-target="#nav-local" type="button" role="tab" aria-selected="true">Local Matches</button>

                            <button class="nav-link text-dark" id="nav-public-tab" data-bs-toggle="tab" data-bs-target="#nav-public" type="button" role="tab" aria-selected="true">Public Matches</button>

                            <button class="nav-link text-dark" id="nav-event-tab" data-bs-toggle="tab" data-bs-target="#nav-event" type="button" role="tab" aria-selected="true">Player Events</button>
                        </div>
                    </nav>


                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-local" role="tabpanel" aria-labelledby="nav-local-tab">



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
                                            <h4 class="text-center">Matches</h4>
                                            <input id="searchInput" type="text" class="form-control float-start" placeholder="Search..." style="width: 200px;">
                                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                                                New Match
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">

                                                <table id="table1" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Id</th>
                                                            <th scope="col">Team1</th>
                                                            <th scope="col">Team2</th>
                                                            <th scope="col">Court</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">T1 score</th>
                                                            <th scope="col">T2 score</th>
                                                            <th scope="col">Update</th>
                                                            <th scope="col">Finish</th>
                                                            <th scope="col">Cancel</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php

                                                        $query3 =  "SELECT 
                                                matchs.Mid AS MatchID, 
                                                c1.Cname AS Team1Name, 
                                                c2.Cname AS Team2Name, 
                                                courts.CRname AS CourtName, 
                                                matchs.Mdate AS MatchDate, 
                                                matchs.Mtime AS MatchTime, 
                                                matchs.team1score AS Team1Score, 
                                                matchs.team2score AS Team2Score,
                                                matchs.Mstatus AS status
                                            FROM 
                                                matchs 
                                            JOIN 
                                                class AS c1 ON matchs.team1 = c1.id 
                                            JOIN 
                                                class AS c2 ON matchs.team2 = c2.id 
                                            JOIN 
                                                courts ON matchs.McourtId = courts.CRid 
                                            WHERE 
                                                courts.CRAcademyemail = '$academyEmail' 
                                                AND matchs.Mtype = 'local'
                                            ORDER BY 
                                                CASE 
                                                    WHEN matchs.Mstatus = 'booked' THEN 1
                                                    WHEN matchs.Mstatus = 'finished' THEN 2
                                                    ELSE 3
                                                END;";
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
                                                                <?php

                                                                $mytime = explode("-", $row3[5]);



                                                                $string = date("Y-m-d");


                                                                $current_time = time();

                                                                // Add an hour (3600 seconds) to the current time
                                                                $new_time = $current_time + 3600;

                                                                // Format the new time
                                                                $formatted_time = date('H:i', $new_time);

                                                                // Output the new time


                                                                if ($row3[8] == 'booked' && ($row3[4] <= $string && $formatted_time >= $mytime[0])) {
                                                                ?>

                                                                    <form method="POST" action="update-match-score.php">
                                                                        <input type="hidden" name="MATCHID" value=<?php echo $row3[0] ?>>
                                                                        <td><input name="team1Score" style="border: solid; width: 50px;" type="number" value="<?php echo $row3[6] ?>" style="width: 50px;" required> </td>
                                                                        <td><input name="team2Score" style="border: solid; width: 50px;" type="number" value="<?php echo $row3[7] ?>" style="width: 50px;" required></td>
                                                                        <td><button type="submit" href="#" class='btn btn-primary'>Update</button></td>
                                                                    </form>
                                                                    <form method="POST" action="finish-match.php">

                                                                        <input type="hidden" name="MATCHID" value=<?php echo $row3[0] ?>>
                                                                        <td><button type="submit" href="#" class='btn btn-success'>Finish</button></td>

                                                                    </form>

                                                                    <td><a type="submit" href="#" style="background-color: #a9a9a9; color: #808080; pointer-events: none;" class='btn btn-danger'>Cancel</a></td>

                                                                <?php
                                                                } else if ($row3[8] == 'finished') {
                                                                ?>
                                                                    <td><?php echo $row3[6] ?></td>
                                                                    <td><?php echo $row3[7] ?></td>
                                                                    <td colspan="3" style="background-color: #ff6666;" class="text-center">Finished</td>
                                                                <?php
                                                                } else {

                                                                ?>
                                                                    <td><?php echo $row3[6] ?></td>
                                                                    <td><?php echo $row3[7] ?></td>
                                                                    <td><button style="background-color: #a9a9a9; color: #808080; pointer-events: none;" type="submit" href="#" class='btn btn-primary'>Update</button></td>
                                                                    <td><button style="background-color: #a9a9a9; color: #808080; pointer-events: none;" type="submit" href="#" class='btn btn-success'>Finish</button></td>
                                                                    <td><a type="submit" href="academy-Games.php?MatchID=<?php echo $row3[0] ?>&cancelMatch=true" onclick="return confirm('Are you sure you want to cancel this match?');" class='btn btn-danger'>Cancel</a></td>
                                                                <?php
                                                                }
                                                                ?>

                                                                <!-- <td><a href="#" class='btn btn-success'>Finish</a></td> -->

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


                        <div class="tab-pane fade" id="nav-public" role="tabpanel" aria-labelledby="nav-public-tab">

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
                                            <h4 class="text-center">Matches</h4>
                                            <input id="searchInput2" type="text" class="form-control float-start" placeholder="Search..." style="width: 200px;">
                                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#PBinsertdata">
                                                New Match
                                            </button>
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
                                                            <th scope="col">T1 Score</th>
                                                            <th scope="col">T2 Score</th>
                                                            <th scope="col">Update</th>
                                                            <th scope="col">Finish</th>
                                                            <th scope="col">Cancel</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php

                                                        $query3 =  "SELECT matchs.Mid AS MatchID, c1.Cname AS Team1Name, c2.Cname AS Team2Name, courts.CRname AS CourtName, matchs.Mdate AS MatchDate, matchs.Mtime AS MatchTime, matchs.team1Score, matchs.team2Score, matchs.Mstatus FROM matchs JOIN class AS c1 ON matchs.team1 = c1.id JOIN class AS c2 ON matchs.team2 = c2.id JOIN courts ON matchs.McourtId = courts.CRid WHERE courts.CRAcademyemail = '$academyEmail' AND matchs.Mtype = 'public'";
                                                        $result3 = $pdo->query($query3);

                                                        $r3 = $result3->rowCount();

                                                        for ($i = 0; $i < $r3; $i++) {
                                                            $row3 = $result3->fetch(PDO::FETCH_NUM);
                                                        ?>
                                                            <tr class="myRows2">
                                                                <td id="myclassid"><?php echo  $row3[0] ?></td>
                                                                <td><?php echo  $row3[1] ?></td>
                                                                <td><?php echo  $row3[2] ?></td>
                                                                <td><?php echo  $row3[3] ?></td>
                                                                <td><?php echo $row3[4] ?></td>
                                                                <td><?php echo $row3[5] ?></td>
                                                                <?php
                                                                $mytime = explode("-", $row3[5]);



                                                                $string = date("Y-m-d");


                                                                $current_time = time();

                                                                // Add an hour (3600 seconds) to the current time
                                                                $new_time = $current_time + 3600;

                                                                // Format the new time
                                                                $formatted_time = date('H:i', $new_time);

                                                                // Output the new time


                                                                if ($row3[8] == 'booked' && ($row3[4] <= $string && $formatted_time >= $mytime[0])) {
                                                                ?>

                                                                    <form method="POST" action="update-match-score.php">
                                                                        <input type="hidden" name="MATCHID" value=<?php echo $row3[0] ?>>
                                                                        <td><input name="team1Score" type="number" value="<?php echo $row3[6] ?>" style="width: 50px;" required> </td>
                                                                        <td><input name="team2Score" type="number" value="<?php echo $row3[7] ?>" style="width: 50px;" required></td>
                                                                        <td><button type="submit" href="#" class='btn btn-primary'>Update</button></td>
                                                                    </form>
                                                                    <form action="finish-match.php" method="post">
                                                                        <input type="hidden" name="MATCHID" value=<?php echo $row3[0] ?>>
                                                                        <td><button type="submit" href="#" class='btn btn-primary'>Finish</button></td>
                                                                    </form>
                                                                    <td><a type="submit" href="#" style="background-color: #a9a9a9; color: #808080; pointer-events: none;" class='btn btn-danger'>Cancel</a></td>
                                                                <?php
                                                                } else if ($row3[8] == 'finished') {

                                                                ?>
                                                                    <td><?php echo $row3[6] ?></td>
                                                                    <td><?php echo $row3[7] ?></td>
                                                                    <td colspan="3" style="background-color: #ff6666;" class="text-center">Finished</td>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <td><?php echo $row3[6] ?></td>
                                                                    <td><?php echo $row3[7] ?></td>
                                                                    <td><button style="background-color: #a9a9a9; color: #808080; pointer-events: none;" type="submit" href="#" class='btn btn-primary'>Update</button></td>
                                                                    <td><button style="background-color: #a9a9a9; color: #808080; pointer-events: none;" type="submit" href="#" class='btn btn-success'>Finish</button></td>
                                                                    <td><a type="submit" href="academy-Games.php?MatchID=<?php echo $row3[0] ?>&cancelMatch=true" onclick="return confirm('Are you sure you want to cancel this match?');" class='btn btn-danger'>Cancel</a></td>

                                                                <?php

                                                                }
                                                                ?>

                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                        <?php

                                                        $query44 = "SELECT m.Mid, c1.cname AS Team1Cname, c2.cname AS Team2Cname, cr.CRname, m.Mdate, m.Mtime, m.team1Score, m.team2Score, m.Mstatus FROM matchs m JOIN class c1 ON m.team1 = c1.id JOIN class c2 ON m.team2 = c2.id JOIN courts cr ON m.Mcourtid = cr.CRid WHERE c1.academyEmail = cr.CRAcademyemail AND c2.academyEmail <> cr.CRAcademyemail AND c2.academyEmail = '$academyEmail'";

                                                        $result44 = $pdo->query($query44);

                                                        $r44 = $result44->rowCount();

                                                        for ($i = 0; $i < $r44; $i++) {
                                                            $row44 = $result44->fetch(PDO::FETCH_NUM);

                                                        ?>

                                                            <tr class="myRows2">
                                                                <td id="myclassid"><?php echo  $row44[0] ?></td>
                                                                <td><?php echo  $row44[1] ?></td>
                                                                <td><?php echo  $row44[2] ?></td>
                                                                <td><?php echo  $row44[3] ?></td>
                                                                <td><?php echo $row44[4] ?></td>
                                                                <td><?php echo $row44[5] ?></td>
                                                                <td><?php echo $row44[6] ?></td>
                                                                <td><?php echo $row44[7] ?></td>
                                                                <?php if ($row44[8] == "finished") { ?>
                                                                    <td colspan="3" class="text-center" style="background-color: #ff6666;">Finished</td>
                                                                <?php } else {   ?>
                                                                    <td colspan="3" class="text-center" style="background-color: #e6f7ff;">Joined</td>
                                                                <?php } ?>
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


                        <div class="tab-pane fade" id="nav-event" role="tabpanel" aria-labelledby="nav-event-tab">


                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="text-center">Events</h4>
                                            <input id="searchInput3" type="text" class="form-control float-start" placeholder="Search..." style="width: 200px;">
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">

                                                <table id="table3" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Id</th>
                                                            <th scope="col">Creator</th>
                                                            <th scope="col">Court</th>
                                                            <th scope="col">City</th>
                                                            <th scope="col">Sport</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Time</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Cancel</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php

                                                        $query3 =  "SELECT Eid, name, CRname, CRlocation, CRsportname, Evdate, Evtime, Evstatus FROM events NATURAL JOIN courts NATURAL JOIN player WHERE CRid = Evcourtid and playeremail = email AND CRAcademyemail = '$academyEmail' ORDER BY FIELD(Evstatus, 'booked', 'ongoing', 'finished')";
                                                        $result3 = $pdo->query($query3);

                                                        $r3 = $result3->rowCount();

                                                        for ($i = 0; $i < $r3; $i++) {
                                                            $row3 = $result3->fetch(PDO::FETCH_NUM);
                                                        ?>
                                                            <tr class="myRows3">
                                                                <td id="myclassid"><?php echo  $row3[0] ?></td>
                                                                <td><?php echo  $row3[1] ?></td>
                                                                <td><?php echo  $row3[2] ?></td>
                                                                <td><?php echo  $row3[3] ?></td>
                                                                <td><?php echo $row3[4] ?></td>
                                                                <td><?php echo $row3[5] ?></td>
                                                                <td><?php echo $row3[6] ?></td>
                                                                <td><?php echo $row3[7] ?></td>
                                                                <?php


                                                                if ($row3[7] == 'booked') {
                                                                ?>


                                                                    <td><a type="submit" href="academy-Games.php?EVENTID=<?php echo $row3[0] ?>&cancelEvent=true" onclick="return confirm('Are you sure you want to cancel this event?');" class='btn btn-danger'>Cancel</a></td>

                                                                <?php
                                                                } else if ($row3[7] == 'finished' || $row3[7] == 'ongoing') {
                                                                ?>
                                                                    <td><button style="background-color: #a9a9a9; color: #808080; pointer-events: none;" type="submit" href="#" class='btn btn-danger'>Cancel</button></td>
                                                                <?php
                                                                }

                                                                ?>

                                                                <!-- <td><a href="#" class='btn btn-success'>Finish</a></td> -->

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

                </div>

    </div>

    <footer class="green-footer">
    
    </footer>



    <div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertdataLabel">Create New Match</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="MatchPDO.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group mb-3">
                            <label>Sport</label>
                            <select id="selectSport" name="sport" class="form-select" required>

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
                            <label>Team 1</label>
                            <select id="selectedTeam1" name="team1" class="form-select" required>
                                <option selected disabled value="">Choose...</option>

                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Team 2</label>
                            <select id="selectedTeam2" name="team2" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Choose date</label>
                            <select id="dateSelect" name="date" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Choose Court</label>
                            <select id="selectedCourt" name="court" class="form-select">
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Available timings</label>
                            <select id="selectedTime" name="time" class="form-select">
                                <option selected disabled value="">Choose...</option>
                            </select>
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


    <div class="modal fade" id="PBinsertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="PBinsertdataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="PBinsertdataLabel">Create New Public Match</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="PB-MatchPDO.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group mb-3">
                            <label>Select Academy</label>
                            <select id="PBAcademy" name="PBAcademy" class="form-select" required>

                                <?php
                                $query1 = "SELECT email, name From academy WHERE email <> '$academyEmail'";

                                $result1 = $pdo->query($query1);

                                $r1 = $result1->rowCount();

                                for ($i = 0; $i < $r1; $i++) {
                                    $row1 = $result1->fetch(PDO::FETCH_NUM);

                                    echo "<option value=\"$row1[0]\"> $row1[1]  </option>";
                                }



                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Sport</label>
                            <select id="PBselectSport" name="PBsport" class="form-select" required>

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
                            <label>Home Team</label>
                            <select id="PBselectedTeam1" name="PBteam1" class="form-select" required>
                                <option selected disabled value="">Choose...</option>

                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Away Team</label>
                            <select id="PBselectedTeam2" name="PBteam2" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Choose date</label>
                            <select id="PBdateSelect" name="PBdate" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Choose Court</label>
                            <select id="PBselectedCourt" name="PBcourt" class="form-select">
                                <option selected disabled value="">Choose...</option>
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label>Available timings</label>
                            <select id="PBselectedTime" name="PBtime" class="form-select">
                                <option selected disabled value="">Choose...</option>
                            </select>
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




    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var search_input = document.getElementById("searchInput");
            var table2 = document.getElementById("table1");
            var num_of_rows = table2.getElementsByClassName("myRows");

            search_input.addEventListener('keyup', function() {
                var search_value = search_input.value.toLowerCase();
                for (let i = 0; i < num_of_rows.length; i++) {
                    var data_cells = num_of_rows[i].getElementsByTagName('td');
                    let found = false;

                    for (let j = 0; j < data_cells.length; j++) {
                        var cellText = data_cells[j].textContent.toLowerCase();
                        if (cellText.includes(search_value)) {
                            found = true;
                            break;
                        }
                    }
                    if (found) {
                        num_of_rows[i].style.display = "";
                    } else {
                        num_of_rows[i].style.display = "none";
                    }
                }
            })
        });
    </script>






    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var search_input = document.getElementById("searchInput2");
            var table2 = document.getElementById("table2");
            var num_of_rows = table2.getElementsByClassName("myRows2");

            search_input.addEventListener('keyup', function() {
                var search_value = search_input.value.toLowerCase();
                for (let i = 0; i < num_of_rows.length; i++) {
                    var data_cells = num_of_rows[i].getElementsByTagName('td');
                    let found = false;

                    for (let j = 0; j < data_cells.length; j++) {
                        var cellText = data_cells[j].textContent.toLowerCase();
                        if (cellText.includes(search_value)) {
                            found = true;
                            break;
                        }
                    }
                    if (found) {
                        num_of_rows[i].style.display = "";
                    } else {
                        num_of_rows[i].style.display = "none";
                    }
                }
            })
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var search_input = document.getElementById("searchInput3");
            var table2 = document.getElementById("table3");
            var num_of_rows = table2.getElementsByClassName("myRows3");

            search_input.addEventListener('keyup', function() {
                var search_value = search_input.value.toLowerCase();
                for (let i = 0; i < num_of_rows.length; i++) {
                    var data_cells = num_of_rows[i].getElementsByTagName('td');
                    let found = false;

                    for (let j = 0; j < data_cells.length; j++) {
                        var cellText = data_cells[j].textContent.toLowerCase();
                        if (cellText.includes(search_value)) {
                            found = true;
                            break;
                        }
                    }
                    if (found) {
                        num_of_rows[i].style.display = "";
                    } else {
                        num_of_rows[i].style.display = "none";
                    }
                }
            })
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#PBselectSport').change(function() {
                var sportId = $('#PBselectSport').val();

                $.ajax({
                    method: "POST",
                    url: 'fetch1.php',
                    data: {
                        'sportID': sportId,
                    },
                    success: function(response) {

                        $('#PBselectedTeam1').html(response);

                    }

                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function handleAjaxRequest() {
                var PBacademy = $('#PBAcademy').val();
                var sport = $('#PBselectSport').val();

                if (PBacademy && sport) {


                    console.log(PBacademy);

                    console.log(sport);
                    $.ajax({
                        method: "POST",
                        url: 'PB-fetch-Teams.php',
                        data: {
                            'PBacademy': PBacademy,
                            'sportID': sport,
                        },
                        success: function(response) {

                            $('#PBselectedTeam2').html(response);

                        }

                    });
                }

            }


            $('#PBAcademy').change(handleAjaxRequest);

            $('#PBselectSport').change(handleAjaxRequest);
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#PBselectSport').change(function() {
                var sportId = $('#PBselectSport').val();

                $.ajax({
                    method: "POST",
                    url: 'fetch3.php',
                    data: {
                        'sportID': sportId,
                    },
                    success: function(response) {

                        $('#PBselectedCourt').html(response);

                    }

                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function handleAjaxRequest() {
                var court = $('#PBselectedCourt').val();
                var date = $('#PBdateSelect').val();

                if (court && date) {
                    $.ajax({
                        method: "POST",
                        url: 'fetch4.php',
                        data: {
                            'courtId': court,
                            'dateSelected': date,
                        },
                        success: function(response) {

                            $('#PBselectedTime').html(response);

                        }

                    });
                }

            }


            $('#PBselectedCourt').change(handleAjaxRequest);

            $('#PBdateSelect').change(handleAjaxRequest);
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#selectSport').change(function() {
                var sportId = $('#selectSport').val();

                $.ajax({
                    method: "POST",
                    url: 'fetch1.php',
                    data: {
                        'sportID': sportId,
                    },
                    success: function(response) {

                        $('#selectedTeam1').html(response);

                    }

                });
            });
        });
    </script>







    <script>
        $(document).ready(function() {
            $('#selectedTeam1').change(function() {
                var team1Id = $('#selectedTeam1').val();
                var sportId = $('#selectSport').val();

                $.ajax({
                    method: "POST",
                    url: 'fetch2.php',
                    data: {
                        'team1ID': team1Id,
                        'sportID': sportId,
                    },
                    success: function(response) {

                        $('#selectedTeam2').html(response);

                    }

                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#selectSport').change(function() {
                var sportId = $('#selectSport').val();

                $.ajax({
                    method: "POST",
                    url: 'fetch3.php',
                    data: {
                        'sportID': sportId,
                    },
                    success: function(response) {

                        $('#selectedCourt').html(response);

                    }

                });
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            function handleAjaxRequest() {
                var court = $('#selectedCourt').val();
                var date = $('#dateSelect').val();

                if (court && date) {
                    $.ajax({
                        method: "POST",
                        url: 'fetch4.php',
                        data: {
                            'courtId': court,
                            'dateSelected': date,
                        },
                        success: function(response) {

                            $('#selectedTime').html(response);

                        }

                    });
                }

            }


            $('#selectedCourt').change(handleAjaxRequest);

            $('#dateSelect').change(handleAjaxRequest);
        });
    </script>










    <script>
        // Function to populate select tag with dates within 1 week range
        function populateDates() {
            var select = document.getElementById("dateSelect");
            var today = new Date();

            // Add current date
            var currentDateOption = document.createElement("option");
            currentDateOption.text = formatDate(today);
            currentDateOption.value = formatDate(today);
            select.appendChild(currentDateOption);

            // Add dates within 1 week range
            for (var i = 1; i <= 14; i++) {
                var nextDate = new Date();
                nextDate.setDate(today.getDate() + i);
                var option = document.createElement("option");
                option.text = formatDate(nextDate);
                option.value = formatDate(nextDate);
                select.appendChild(option);
            }
        }

        // Function to format date as YYYY-MM-DD
        function formatDate(date) {
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var year = date.getFullYear();
            return year + '-' + month + '-' + day;
        }

        // Call function to populate select tag with dates
        populateDates();
    </script>


    <script>
        // Function to populate select tag with dates within 1 week range
        function populateDates() {
            var select = document.getElementById("PBdateSelect");
            var today = new Date();

            // Add current date
            var currentDateOption = document.createElement("option");
            currentDateOption.text = formatDate(today);
            currentDateOption.value = formatDate(today);
            select.appendChild(currentDateOption);

            // Add dates within 1 week range
            for (var i = 1; i <= 14; i++) {
                var nextDate = new Date();
                nextDate.setDate(today.getDate() + i);
                var option = document.createElement("option");
                option.text = formatDate(nextDate);
                option.value = formatDate(nextDate);
                select.appendChild(option);
            }
        }

        // Function to format date as YYYY-MM-DD
        function formatDate(date) {
            var month = String(date.getMonth() + 1).padStart(2, '0');
            var day = String(date.getDate()).padStart(2, '0');
            var year = date.getFullYear();
            return year + '-' + month + '-' + day;
        }

        // Call function to populate select tag with dates
        populateDates();
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