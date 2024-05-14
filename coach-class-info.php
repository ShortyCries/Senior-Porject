<?php

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);






if (isset($_GET['Pemail'])) {
   
    $playerEmail = $_GET['Pemail'];
    $class_id = $_GET['classid'];

    echo "
    <div class='container'>

   
    $playerEmail
    $class_id
    
    <form action='submit-report.php' method='post'>
        <input type='hidden' name='Pemail' value='$playerEmail'>
        <input type='hidden' name='classID' value='$class_id'>
        <label for='report'>Report:</label>
        <div class=\"form-group\">
        <label style=\"font-weight: bold; color:black\" for=\"inputEmail4\">Description</label>
        <textarea name=\"description\" style=\"height:150px;\" type=\"text\" class=\"form-control\" id=\"realdescription\" placeholder=\"\" required></textarea>
        </div>
        <button type='submit' class='btn btn-primary'>Submit Report</button>
    </form>
    </div>
    ";



}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap5/cssbt5/bootstrap.css">
    <link rel="stylesheet" href="mycss/styles.css">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script src="bootstrap5/jsbt5/bootstrap.bundle.min.js"> </script>
</head>

<body>








    <?php





    if (isset($_POST['click_view_class_btn'])) {

 echo '<div class="row justify-content-center">
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
                                <th scope="col">Phone</th>
                                <th scope="col">Add Report</th>
                            </tr>
                        </thead>


                </div>
                </div>
            </div>
        </div>
    </div>    
    
                <tbody>';

        $class_id = $_POST['class_id'];


        $query = "SELECT name, email, DOB, phone from joins NATURAL JOIN player where classid = '$class_id' AND status = 'accepted' AND email = playeremail";

        $result = $pdo->query($query);

        $r = $result->rowCount();

        $currentDate = date('Y-m-d');


        for ($i = 0; $i < $r; $i++) {
            $row = $result->fetch(PDO::FETCH_NUM);

            $dateOfBirth = $row[2];

            $diff = date_diff(date_create($dateOfBirth), date_create($currentDate));

            echo "<tr>";

            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $diff->format('%y') . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo "<td> <a href='coach-class-info.php?Pemail={$row[1]}&classid={$class_id}' class='btn btn-success'>Add Report</a> </td>";

            echo "</tr>";
        }
    }


    echo '</tbody>';


    ?>









</body>

</html>