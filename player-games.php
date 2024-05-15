<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$playerEmail = $_SESSION['email'];

$query = "SELECT Eid, Evcourtid, playeremail, Evdate, Evtime, Evstatus FROM events Where playeremail <> '$playerEmail' ";

$result = $pdo->query($query);

$r = $result->rowCount();

$currentDate = date('Y-m-d');
$dateTime = new DateTime();
$currentTime = $dateTime->format('H:i');
$dateTime->modify('+1 hour');
$oneHourLater = $dateTime->format('H:i');


// echo $currentDate;

// echo $oneHourLater;

$query12 = "SELECT Eid, Evdate FROM events WHERE (Evstatus ='booked' OR Evstatus ='ongoing') AND playeremail='$playerEmail'";

$result12 = $pdo->query($query12);



$r123 = $result12->rowCount();




for ($i = 0; $i < $r123; $i++) {

  $r12 = $result12->fetch(PDO::FETCH_NUM);
  
  if ($currentDate > $r12[1]) {
    $query13 = "UPDATE events SET Evstatus = 'finished' WHERE playeremail='$playerEmail' AND (Evstatus = 'booked' OR Evstatus ='ongoing') AND Eid = '$r12[0]'";
    $result13 = $pdo->exec($query13);
  }
}

$query10 = "SELECT Eid, Evtime FROM events WHERE (Evstatus ='booked' OR Evstatus ='ongoing') AND playeremail='$playerEmail'";

$result10 = $pdo->query($query10);

$r333 = $result10->rowCount();



for ($i2 = 0; $i2 < $r333; $i2++) {

  $r10 = $result10->fetch(PDO::FETCH_NUM);

  

  $times = explode('-', $r10[1]);

  if (isset($times[1])) {
    if (($oneHourLater >= $times[0]) && ($oneHourLater < $times[1])) {
      $query11 = "UPDATE events SET Evstatus = 'ongoing' WHERE Evdate = '$currentDate' AND playeremail='$playerEmail' AND Evstatus = 'booked' AND Eid = '$r10[0]'";
      $result11 = $pdo->exec($query11);
    }
  }

  if (isset($times[1])) {
    if ($oneHourLater >= $times[1]) {
      $query11 = "UPDATE events SET Evstatus = 'finished' WHERE Evdate = '$currentDate' AND playeremail='$playerEmail' AND (Evstatus = 'booked' OR Evstatus ='ongoing') AND Eid ='$r10[0]'";
      $result11 = $pdo->exec($query11);
    }
  }
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Playerpage.php" style="padding: 10px 20px; ">Home</a>
            </li>
            <li class="u-nav-item"><a onclick="logoutAlert()" class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Logout</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" target="_blank" style="padding: 10px 20px;">About us</a>
            </li>

            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" target="_blank" style="padding: 10px 20px;">Contact </a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Edit-Profile-player.php" target="_blank" style="padding: 10px 20px;">Edit Profile</a> </li>
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
      <a href="Playerpage.php" class="u-image u-logo u-image-1" data-image-width="498" data-image-height="102">
        <img src="img/2-1.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>


  <div class="mybackground-img">

    <div class="container">

      <div class="box-container">
        <a href="player-games.php" style="text-decoration: none;">
          <div class="box games-box" id="box1" style="background-color: grey;">
            <div class="img-container">
              <img class="img" src="/img/games-.png" alt="" id="img1">

            </div>
            <p>Games</p>
          </div>
        </a>
        <a href="player-academies.php" style="text-decoration: none;">
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
        <a href="player-class.php" style="text-decoration: none;">
          <div class="box class-box" id="box3">
            <div class="img">
              <img class="img" src="/img/classes-.png" alt="" id="img3">

            </div>
            <p>Class</p>
          </div>
        </a>
      </div>
      <div class="box-container">
        <a href="player-players.php" style="text-decoration: none;">
          <div class="box" id="box4">
            <div class="img">
              <img class="img" src="/img/player-.png" alt="" id="img4">
            </div>
            <p>Players</p>
          </div>
        </a>
        <a href="player-coaches.php" style="text-decoration: none;">
          <div class="box" id="box5">
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
    <div class="container">
      <nav>
        <div class="nav nav-tabs justify-content-center mb-5" id="nav-tab" role="tablist">
          <button class="nav-link active text-dark" id="nav-local-tab" data-bs-toggle="tab" data-bs-target="#nav-local" type="button" role="tab" aria-selected="true">Your Events</button>

          <button class="nav-link text-dark" id="nav-public-tab" data-bs-toggle="tab" data-bs-target="#nav-public" type="button" role="tab" aria-selected="true">Events</button>

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
                  <h4 class="text-center">Your Events</h4>
                  <?php
                  $query9 = "SELECT * FROM events WHERE playeremail = '$playerEmail' AND Evstatus = 'booked'";

                  $result9 = $pdo->query($query9);

                  $r9 = $result9->rowCount();
                  ?>
                  <?php if ($r9 >= 2) : ?>
                    <button type="button" style="background-color: #e0e0e0; color: #808080;  pointer-events: none;" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                      New Event
                    </button>
                  <?php else : ?>
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#insertdata">
                      New Event
                    </button>
                  <?php endif; ?>


                </div>
                <div class="card-body">
                  <div class="table-responsive">

                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Court Name</th>
                          <th scope="col">Date</th>
                          <th scope="col">Time</th>
                          <th scope="col">Status</th>
                          <th scope="col">View</th>
                          <th scope="col">Request Role</th>
                          <th scope="col">Cancel</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                        $query3 = "SELECT CRid, Eid, CRname, Evdate, Evtime, Evstatus  FROM events NATURAL JOIN courts WHERE playerEmail = '$playerEmail' AND CRid = Evcourtid ORDER BY CASE 
                                        WHEN Evstatus = 'booked' THEN 1
                                        WHEN Evstatus = 'ongoing' THEN 2 
                                        WHEN Evstatus = 'finished' THEN 3
                                        ELSE 4
                                          END";
                        $result3 = $pdo->query($query3);

                        $r3 = $result3->rowCount();

                        for ($i = 0; $i < $r3; $i++) {
                          $row3 = $result3->fetch(PDO::FETCH_NUM);
                        ?>
                          <tr>

                            <td id="myeventID"><?php echo  $row3[1] ?></td>
                            <td id="mycourtID" value="<?php echo $row3[0] ?>"><?php echo  $row3[2] ?></td>
                            <td><?php echo  $row3[3] ?></td>
                            <td><?php echo  $row3[4] ?></td>
                            <td> <?php if ($row3[5] === "booked") : ?>
                                <span style="background-color: orange; padding: 2px;"><?php echo $row3[5] ?></span>
                              <?php elseif ($row3[5] === "ongoing") : ?>
                                <span style="background-color: #6eb5ff; padding: 2px;"><?php echo $row3[5] ?></span>
                              <?php elseif ($row3[5] === "finished") : ?>
                                <span style="background-color: red; padding: 2px;"><?php echo $row3[5] ?></span>
                              <?php else : ?>
                                <?php echo $row3[5] ?>
                              <?php endif; ?>
                            </td>
                            <td><a class='btn btn-primary'>View</a></td>
                            <td>
                              <?php if ($row3[5] === "finished" || $row3[5] === "ongoing") : ?>
                                <a class='btn btn-primary' style="background-color: #e0e0e0; color: #808080;  pointer-events: none;">Request Role</a>
                              <?php else : ?>
                                <a class='btn btn-primary request_Role'>Request Role</a>
                              <?php endif; ?>
                            </td>
                            <td>
                              <?php if ($row3[5] === "finished" || $row3[5] === "ongoing") : ?>
                                <a class='btn btn-danger' style="background-color: #e0e0e0; color: #808080;  pointer-events: none;">Cancel</a>
                              <?php else : ?>
                                <a class='btn btn-danger'>Cancel</a>
                              <?php endif; ?>
                            </td>
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

          <!--contect for other tab here...-->
          <?php
          if (isset($_SESSION['evstatus']) && $_SESSION['evstatus'] != '') {


          ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php echo $_SESSION['evstatus']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

          <?php
            unset($_SESSION['status']);
          }
          ?>

          <div class="container-Listing">



            <div class="box-container-Listing">





              <?php for ($i = 0; $i < $r; $i++) {
                $row = $result->fetch(PDO::FETCH_NUM);
              ?>

                <div class="box-Listing">
                  <div class="image-Listing">
                    <img src="img/profiletest.jpg" alt="">
                  </div>
                  <div class="content-Listing">

                    <h3 class="court_id" style="display: none;"><?php echo $row[1] ?></h3>


                    <p class="event_id"><?php echo $row[0] ?></p>

                    <a href="#" type="button" class="btn btn-success view_data">
                      Read More
                    </a>

                    <a href="#" type="button" class="btn btn-success join_btn">
                      Request Join
                    </a>

                    <div class="icons-Listing">

                    </div>
                  </div>
                </div>


              <?php
              }
              ?>





            </div>

            <div id="load-more"> load more </div>
          </div>



        </div>

      </div>


      <div class="modal fade" id="insertRoles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertRolesLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="insertRolesLabel">Request Roles</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="rolePDO.php" method="POST">
              <div class="modal-body">


                <div class="showRoleForm text-center">


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

      <div class="modal fade" id="insertdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="insertdataLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="insertdataLabel">Create New Event</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="EventPDO.php" method="POST">
              <div class="modal-body">

                <div class="form-group mb-3">
                  <label>Sport</label>
                  <select id="selectedSport" name="sport" class="form-select" required>

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
                  <label>City</label>
                  <select id="selectedCity" name="city" class="form-select" required>
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
                  <label>Court</label>
                  <select id="selectedCourt" name="court" class="form-select">
                    <option selected disabled value="">Choose...</option>
                  </select>
                </div>


                <div class="form-group mb-3">
                  <label>Date</label>
                  <select id="dateSelect" name="date" class="form-select" required>
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



      <!-- READ MORE MODEL -->
      <div class="modal fade" id="viewusermodal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Event Info</h5>
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

      <div class="modal fade" id="viewinvitemodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="player-participate.php" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="myheader"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label>Choose your role</label>
                <select id="roleSelect" name="rolename" class="form-select" required>
                  <option selected disabled value="">Choose...</option>

                </select>

                <input type="hidden" id="dataInput" name="eventID" value="">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Request to join</button>
              </div>


            </form>
          </div>
        </div>
      </div>



      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


      <script>
        $(document).ready(function() {

          $('.request_Role').click(function(e) {


            var tableCourtID = $(this).closest('tr').find('#mycourtID').attr('value');
            var tableEventID = $(this).closest('tr').find('#myeventID').text();


            console.log(tableCourtID);
            console.log(tableEventID);




            $.ajax({
              method: "POST",
              url: "fetch-role-form.php",
              data: {
                'courtID': tableCourtID,
                'eventID': tableEventID,
              },
              success: function(response) {

                $('.showRoleForm').html(response);
                $('#insertRoles').modal('show');

              }
            });

          });

        });
      </script>


      <script>
        $(document).ready(function() {

          $('.view_data').click(function(e) {
            e.preventDefault();

            var courtID = $(this).closest('div').find('.court_id').text();
            var eventID = $(this).closest('div').find('.event_id').text();

            console.log(courtID);
            console.log(eventID);



            $.ajax({
              method: "POST",
              url: "event-info.php",
              data: {
                'courtID': courtID,
                'eventID': eventID,
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

          $('.join_btn').click(function(e) {
            e.preventDefault();

            var courtID = $(this).closest('div').find('.court_id').text();
            var eventID = $(this).closest('div').find('.event_id').text();


            $('#dataInput').val(eventID);



            $.ajax({
              method: "POST",
              url: "joinng-prompt.php",
              data: {
                'courtID': courtID,
                'eventID': eventID,
              },
              success: function(response) {

                $('#roleSelect').html(response);
                $('#viewinvitemodal').modal('show');



              }

            });

          });


        });
      </script>



      <script>
        let loadMoreBtn = document.querySelector('#load-more');
        let currentItem = 3;

        loadMoreBtn.onclick = () => {
          let boxes = [...document.querySelectorAll('.container-Listing .box-container-Listing .box-Listing')];
          for (var i = currentItem; i < currentItem + 3; i++) {
            boxes[i].style.display = 'inline-block';
          }
          currentItem += 3;

          if (currentItem >= boxes.length) {
            loadMoreBtn.style.display = 'none';
          }
        }
      </script>










      <script>
        $(document).ready(function() {
          function handleAjaxRequest() {
            var city = $('#selectedCity').val();
            var sport = $('#selectedSport').val();

            if (city && sport) {
              $.ajax({
                method: "POST",
                url: 'event-Fetch.php',
                data: {
                  'city': city,
                  'sport': sport,
                },
                success: function(response) {

                  $('#selectedCourt').html(response);

                }

              });
            }

          }


          $('#selectedCity').change(handleAjaxRequest);

          $('#selectedSport').change(handleAjaxRequest);
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
          for (var i = 1; i <= 6; i++) {
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