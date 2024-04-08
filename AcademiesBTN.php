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
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta charset="utf-8">
     <meta name="keywords" content="">
     <meta name="description" content="">
     <title>AcademiesBTN</title>
     <link rel="stylesheet" href="css/nicepage.css" media="screen">
     <link rel="stylesheet" href="css/main.css" media="screen">
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
                    <div class="box" id="box1">
                        <div class="img-container">
                            <img class="img" src="/img/volleyball-.jpg" alt="" id="img1">

                        </div>
                        <p>Classes</p>
                    </div>
                </a>
                <a href="CoachesBTN.php">
                    <div class="box" id="box2">
                        <div class="img">
                            <img class="img" src="/img/coach-.png" alt="" id="img2">

                        </div>
                        <p>Coaches</p>
                    </div>
                </a>
                <a href="GamesBTN.php">
                    <div class="box" id="box3">
                        <div class="img">
                            <img class="img" src="/img/volleyball-.jpg" alt="" id="img3">

                        </div>
                        <p>Games</p>
                    </div>
                </a>
                <a href="CourtsBTN.php">
                    <div class="box" id="box4">
                        <div class="img">
                            <img class="img" src="/img/volleyball-.jpg" alt="" id="img4">

                        </div>
                        <p>Courts</p>
                    </div>
                </a>
                <a href="PlayersBTN.php">
                    <div class="box" id="box5">
                        <div class="img">
                            <img class="img" src="/img/volleyball-.jpg" alt="" id="img5">

                        </div>
                        <p>Players</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box" id="box6" style="background-color: grey;" >
                        <div class="img">
                            <img class="img" src="/img/volleyball-.jpg" alt="" id="img6">

                        </div>
                        <p>Academies</p>
                    </div>
                </a>

            </div>

        </div>

    </div>


    <div class="mybackground-img2">
        <h2 style="text-align: center; color: orange;">Academies</h2>

        <div class="container">
        <div class="justify-content-center row">
            <div class="col-lg-12">
                <div class="candidate-list-widgets mb-4">
                    <form action="#" class="">
                        <div class="g-2 row">
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-briefcase-alt"></i><input id="exampleFormControlInput1" placeholder="Player's Name. " type="search" class="form-control filler-job-input-box form-control" />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-location-point"></i>
                                    <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="AF">Beirut</option>
                                        <option value="AX">Saida</option>
                                        <option value="AL">Sour</option>
                                        <option value="AL">Tripoli</option>
                                        <option value="AL">Bekaa</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="filler-job-form">
                                    <i class="uil uil-clipboard-notes"></i>
                                    <select class="form-select selectForm__inner" data-trigger="true" name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                        <option value="4">Football</option>
                                        <option value="1">Bascketball</option>
                                        <option value="3">Tennis</option>
                                        <option value="5">Volleyball</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div>
                                    <a class="btn btn-primary" href="#"><i class="uil uil-filter"></i> Filter</a><a class="btn btn-success ms-2" href="#"><i class="uil uil-cog"></i> Advance</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="align-items-center row">
                    <div class="col-lg-8">
                        <div class="mb-3 mb-lg-0"><h6 class="fs-16 mb-0">Showing 1 – 8 of 11 results</h6></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="candidate-list-widgets">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="selection-widget">
                                        <select class="form-select" data-trigger="true" name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                            <option value="df">Default</option>
                                            <option value="ne">Newest</option>
                                            <option value="od">Oldest</option>
                                            <option value="rd">Random</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="selection-widget mt-2 mt-lg-0">
                                        <select class="form-select" data-trigger="true" name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                            <option value="df">All</option>
                                            <option value="ne">8 per Page</option>
                                            <option value="ne">12 per Page</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="candidate-list">
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">$get player name</a><span class="badge bg-success ms-1"><i class="mdi mdi-star align-middle"></i>$get ratting</span>
                                        </h5>
                                        <p class="text-muted mb-2">Get his sport</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> $get his sport</li><br>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $get his class</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">$his desc</span><span class="badge bg-soft-secondary fs-14 mt-1">$ his fav sport</span><span class="badge bg-soft-secondary fs-14 mt-1">His prefered role</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"> <i></i><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box bookmark-post card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Gabriel Palmer</a><span class="badge bg-warning ms-1"><i class="mdi mdi-star align-middle"></i>3.4</span>
                                        </h5>
                                        <p class="text-muted mb-2">HTML Developer</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane California</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $250 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1"><span class="badge bg-soft-secondary fs-14 mt-1">Design</span><span class="badge bg-soft-secondary fs-14 mt-1">Developer</span></div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Rebecca Swartz </a><span class="badge bg-success ms-1"><i class="mdi mdi-star align-middle"></i>4.3</span>
                                        </h5>
                                        <p class="text-muted mb-2">Graphic Designer</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $380 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1"><span class="badge bg-soft-secondary fs-14 mt-1">Design</span><span class="badge bg-soft-secondary fs-14 mt-1">Developer</span></div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box bookmark-post card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Betty Richards</a><span class="badge bg-success ms-1"><i class="mdi mdi-star align-middle"></i>4.5</span>
                                        </h5>
                                        <p class="text-muted mb-2">Education Training</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $650 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">Trainer</span><span class="badge bg-soft-secondary fs-14 mt-1">Adobe illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Jeffrey Montgomery</a><span class="badge bg-success ms-1"><i class="mdi mdi-star align-middle"></i>4.9</span>
                                        </h5>
                                        <p class="text-muted mb-2">Restaurant Team Member</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $125 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">Trainer</span><span class="badge bg-soft-secondary fs-14 mt-1">Adobe illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Milton Osborn</a><span class="badge bg-danger ms-1"><i class="mdi mdi-star align-middle"></i>2.5</span>
                                        </h5>
                                        <p class="text-muted mb-2">Assistant / Store Keeper</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $455 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">Trainer</span><span class="badge bg-soft-secondary fs-14 mt-1">Adobe illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">Harold Jordan</a><span class="badge bg-success ms-1"><i class="mdi mdi-star align-middle"></i>4.9</span>
                                        </h5>
                                        <p class="text-muted mb-2">Executive, HR Operations</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $799 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">Trainer</span><span class="badge bg-soft-secondary fs-14 mt-1">Adobe illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="candidate-list-box card mt-4">
                        <div class="p-4 card-body">
                            <div class="align-items-center row">
                                <div class="col-auto">
                                    <div class="candidate-list-images">
                                        <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="" class="avatar-md img-thumbnail rounded-circle" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="candidate-list-content mt-3 mt-lg-0">
                                        <h5 class="fs-19 mb-0">
                                            <a class="primary-link" href="#">MichaeL Drake </a><span class="badge bg-warning ms-1"><i class="mdi mdi-star align-middle"></i>3.9</span>
                                        </h5>
                                        <p class="text-muted mb-2">Full Stack Engineer</p>
                                        <ul class="list-inline mb-0 text-muted">
                                            <li class="list-inline-item"><i class="mdi mdi-map-marker"></i> Oakridge Lane Richardson</li>
                                            <li class="list-inline-item"><i class="mdi mdi-wallet"></i> $240 / hours</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mt-2 mt-lg-0 d-flex flex-wrap align-items-start gap-1">
                                        <span class="badge bg-soft-secondary fs-14 mt-1">Trainer</span><span class="badge bg-soft-secondary fs-14 mt-1">Adobe illustrator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="favorite-icon">
                                <a href="#"><i class="mdi mdi-account-plus fs-18"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mt-4 pt-2 col-lg-12">
                <nav aria-label="Page navigation example">
                    <div class="pagination job-pagination mb-0 justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" tabindex="-1" href="#"><i class="mdi mdi-chevron-double-left fs-15"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="mdi mdi-chevron-double-right fs-15"></i></a>
                        </li>
                    </div>
                </nav>
            </div>
        </div>
    </div>






    </div>

    <div class="mybackground-img2">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                
                        <div class="card-body">
                            
                               
                        
                            
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
        var newSrc = '/img/gifs/volleyball-.gif';


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
        var newSrc3 = '/img/gifs/volleyball-.gif';


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
        var newSrc4 = '/img/gifs/volleyball-.gif';


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