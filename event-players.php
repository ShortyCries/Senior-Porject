<?php

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);


$currentDate = date('Y-m-d');



if (isset($_GET['EVENTID'])) {

    $EVENTID = $_GET['EVENTID'];

    $query = "SELECT name, DOB, Rname, PRstatus, email, PReventid, Evstatus FROM participate NATURAL JOIN role NATURAL JOIN player NATURAL JOIN events WHERE PRplayeremail = email AND PRroleid = Rid AND PReventid = '41' AND PReventid = Eid ";

    $result = $pdo->query($query);

    $r = $result->rowCount();
}


if (isset($_GET['EVENTID2'], $_GET['PEMAIL'])) {

    $EVENTID2 = $_GET['EVENTID2'];

    $PEMAIL = $_GET['PEMAIL'];

    $query2 = "UPDATE participate SET PRstatus = 'accepted' WHERE PReventid = '$EVENTID2' AND PRplayeremail = '$PEMAIL'";

    $result2 = $pdo->exec($query2);

    header("location:event-players.php?EVENTID=$EVENTID2");
}

if (isset($_GET['EVENTID3'], $_GET['PEMAIL'], $_GET['removePlayer'])) {

    $EVENTID3 = $_GET['EVENTID3'];

    $PEMAIL = $_GET['PEMAIL'];

    $query3 = "DELETE FROM participate WHERE PReventid = '$EVENTID3' AND PRplayeremail ='$PEMAIL'";

    $result3 = $pdo->exec($query3);

    header("location:event-players.php?EVENTID=$EVENTID3");
}









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>



    <style>
        .view_user_data {
            overflow-wrap: break-word;
            /* Ensures long words break to the next line */
            word-wrap: break-word;
            /* Legacy support */
            word-break: break-word;
            /* Ensures long words break to the next line */
            white-space: pre-wrap;
            /* Preserves whitespace but wraps text */
        }

        .modal-body .container {
            max-width: 100%;
            /* Ensures container does not exceed modal width */
        }

        .info-section {
            display: flex;
            flex-direction: row;
            margin-top: 1rem;
            padding-bottom: 0.5rem;
            /* Add some padding at the bottom */
            border-bottom: 1px solid #ccc;
            /* Add a bottom border */
        }

        .info-section .label {
            flex: 0 0 auto;
            /* Label takes only the necessary space */
            margin-right: 10px;
            /* Space between label and content */
            font-weight: bold;
            /* Bold font for the label */
        }

        .info-section .content {
            flex: 1 1 auto;
            /* Content takes the remaining space */
            word-wrap: break-word;
            /* Ensure text wraps within the container */
            white-space: pre-wrap;
            /* Ensures whitespace is preserved and wraps text */
        }

        .modal-body h6 {
            margin-bottom: 1rem;
            /* Add some space between different text elements */
        }
    </style>





    <script src="bootstrap5/jsbt5/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
    <link rel="stylesheet" href="mycss/styles.css">
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
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="playerPage.php" style="padding: 10px 20px;">Home</a>
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






















    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Players</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Remove/Decline</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <tbody>
        <?php
        for ($i = 0; $i < $r; $i++) {
            $row = $result->fetch(PDO::FETCH_NUM);

            $dateOfBirth = $row[1];
            $diff = date_diff(date_create($dateOfBirth), date_create($currentDate));

            if ($row[3] == "accepted") {
        ?>
                <tr>
                    <td><?php echo $row[0] ?></td>
                    <td><?php echo $diff->format('%y') ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><a style="background-color: #a9a9a9; color: #808080; pointer-events: none;" href="#" type="button" class="btn btn-success view_data">Accept</a></td>
                    <td> <?php
                            if ($row[6] == "finished" || $row[6] == "ongoing") {
                            ?>
                            <a href="#" class="btn btn-danger" style="background-color: #a9a9a9; color: #808080; pointer-events: none;">Remove</a>
                        <?php
                            } else {
                        ?>
                            <a href="event-players.php?EVENTID3=<?php echo $row[5] ?>&PEMAIL=<?php echo $row[4] ?>&removePlayer=true" class="btn btn-danger">Remove</a>
                        <?php
                            }
                        ?>
                    </td>
                    <td><?php echo $row[3] ?></td>
                </tr>
            <?php
            } else if ($row[3] == "requested") {
            ?>
                <tr>
                    <td style="background-color: #a9a9a9 !important;"><?php echo $row[0] ?></td>
                    <td style="background-color: #a9a9a9 !important;"><?php echo $diff->format('%y') ?></td>
                    <td style="background-color: #a9a9a9 !important;"><?php echo $row[2] ?></td>
                    <td style="background-color: #a9a9a9 !important;">
                        <?php
                        if ($row[6] == "finished" || $row[6] == "ongoing") {
                        ?>
                            <a href="#" class="btn btn-success" style="background-color: #a9a9a9; color: #808080; pointer-events: none;">Accept</a>
                        <?php
                        } else {


                        ?>
                            <a href="event-players.php?EVENTID2=<?php echo $row[5] ?>&PEMAIL=<?php echo $row[4] ?>" type="button" class="btn btn-success view_data">Accept</a>
                        <?php
                        }
                        ?>
                    </td>
                    <td style="background-color: #a9a9a9 !important;">
                        <?php
                        if ($row[6] == "finished" || $row[6] == "ongoing") {
                        ?>
                            <a href="#" class="btn btn-danger" style="background-color: #a9a9a9; color: #808080; pointer-events: none;">Decline</a>
                        <?php
                        } else {
                        ?>
                            <a href="event-players.php?EVENTID3=<?php echo $row[5] ?>&PEMAIL=<?php echo $row[4] ?>&removePlayer=true" class="btn btn-danger">Decline</a>
                        <?php
                        }
                        ?>
                    </td>
                    <td style="background-color: #a9a9a9 !important;"><?php echo $row[3] ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>




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



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>




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