<?php


session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

$query = "SELECT * From academy";

$result = $pdo->query($query);

$r = $result->rowCount();

$query1 = "SELECT * from player";

$result1 = $pdo->query($query1);

$r1 = $result1->rowCount();

$query2 = "SELECT * from coach";

$result2 = $pdo->query($query2);

$r2 = $result2->rowCount();


?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="mycss/adminstyle.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">FIELDFRENZY</span>
                    </a>
                </li>

                <li>
                    <a href="adminPage.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="admin-Acadmies.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Academies</span>
                    </a>
                </li>

                <li>
                    <a href="admin-Players.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Players</span>
                    </a>
                </li>

                <li>
                    <a href="admin-Coaches.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Coaches</span>
                    </a>
                </li>

              

                <li>
                    <a href="Logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>


            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <!-- <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div> -->
                <!-- 
                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div> -->
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="admin-Acadmies.php" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo "{$r}" ?></div>
                            <div class="cardName">Academies</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                </a>

                <a href="admin-Players.php" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo "{$r1}" ?></div>
                            <div class="cardName">Players</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="cart-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="admin-Coaches.php" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers"><?php echo "{$r2}" ?></div>
                            <div class="cardName">Coaches</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>
                </a>
               
            </div>

            <!-- ================ Order Details List ================= -->



        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/adminMain.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>