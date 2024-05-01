<?php
session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
$plaEmail = $_SESSION['email'];

$query = "SELECT name, email, DOB,password,phone, description FROM player ";

$result = $pdo->query($query);

$r = $result->rowCount();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mycss/profile.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>

    <title>Document</title>
</head>

<body class="container">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8 mx-auto">
        <h2 style="color: white;" class="h3 mb-4 page-title">Settings</h2>
        <div class="my-4">
          <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item">
              <a style="font-weight: bold; color:black" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
            </li>
          </ul>
          <form>
            <div class="row mt-5 align-items-center">
              <div class="col-md-3 text-center mb-5">
                <div class="avatar avatar-xl">
                  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
                </div>
              </div>
              <div class="col">
                <div class="row align-items-center">
                  <div class="col-md-7">
                    <h2 style="font-weight: bold; color:green" class="mb-1"><?php echo "" . $_SESSION['name'] . "" ?></h2>
                    <h3 style="font-weight: bold; color:green" class="small mb-3"><span class="badge badge-dark"><?php echo "" . $_SESSION['email'] . "" ?></span></h3>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-md-7">
                    <p class="text-muted">
                      <?php echo "" . $_SESSION['description'] . "" ?>
                    </p>
                  </div>
                  <div class="col">
                    <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                    <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                    <p class="small mb-0 text-muted">(537) 315-1481</p>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputEmail4">Name</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo "" . $_SESSION['name'] . "" ?>" />
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputAddress5">Email</label>
              <input style="font-weight: bold; color:white" type="text" class="form-control" id="inputAddress5" placeholder="<?php echo "" . $_SESSION['description'] . "" ?>" />
            </div>
            <div class="form-group">
              <label style="font-weight: bold; color:white" for="inputEmail4">Description</label>
              <textarea style="font-weight: bold; color:white" style="height: 110px;" type="email" class="form-control" id="inputEmail4" placeholder="<?php echo "" . $_SESSION['email'] . "" ?>"> </textarea>

              <div class="form-group">
                <label style="font-weight: bold; color:white" for="inputAddress5">Email</label>
                <input type="text" class="form-control" id="inputAddress5" placeholder="<?php echo "" . $_SESSION['description'] . "" ?>" />
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label style="font-weight: bold; color:white" for="inputCompany5">Academy</label>
                  <input type="text" class="form-control" id="inputCompany5" placeholder="<?php echo "" . $_SESSION['academy'] . "" ?>" />
                </div>
                <div class="form-group col-md-4">
                  <label style="font-weight: bold; color:white" for="inputState5">City</label>
                  <select id="inputState5" class="form-control">
                    <option selected=""><?php echo "" . $_SESSION['city'] . "" ?></option>
                    <option>Beirut</option>
                    <option>Tripoli</option>
                    <option>Tyra</option>
                    <option>Bekaa</option>
                    <option>Saida</option>
                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label style="font-weight: bold; color:white" for="inputZip5">Phone Number</label>
                  <input type="text" class="form-control" id="inputZip5" placeholder="<?php echo "" . $_SESSION['phone'] . "" ?>" />
                </div>
              </div>
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
              <button type="submit" class="btn btn-primary">Save Change</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</body>

</html>