<?php

session_start();
require_once("config.php");
$pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

if (isset($_GET['testingemail'], $_GET['removeplayer'])) {
    $testingemail = $_GET['testingemail'];
    $delete1 = "DELETE FROM joins WHERE playeremail = '$testingemail' ";
    $delResult1 = $pdo->exec($delete1);

    header("location:academy-Classes.php");
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
                                <th scope="col">View Report</th>
                                <th scope="col">Remove</th>
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
            echo "<td> <a href='class-info.php?Pemail={$row[1]}&classid={$class_id}&viewreport=true' class='btn btn-success'>View Report</a></td>";
            echo "<td> <a href='class-info.php?Pemail={$row[1]}&removeplayer='true'  class='btn btn-danger'> Remove </a> </td> ";

            echo "</tr>";
        }
    }


    echo '</tbody>';


    ?>



<?php

if (isset($_GET['Pemail'], $_GET['viewreport'])) {

    $playerEmail = $_GET['Pemail'];
    $classID = $_GET['classid'];


    $query5 = "SELECT report FROM joins WHERE playeremail = '$playerEmail' AND classId='$classID'";


    $result5 = $pdo->query($query5);

    $r5 = $result5->fetch(PDO::FETCH_COLUMN);


    // echo $r5;


    $separator = "[~|~]";

    $individualReports = explode($separator, $r5);


    $reports = array_chunk($individualReports, 3);

    $counter = 0;


    // print_r($reports);
    echo " <div class=\"container\">";

    for ($counter = 0; $counter < count($reports)-1; $counter++) {
        echo "<div>";
        echo "Message: " . $reports[$counter][0] . "<br>";
        echo "Date: " . $reports[$counter][1] . "<br>";
        echo "Time: " . $reports[$counter][2] . "<br>";
        echo "</div>";
    }

     //actual count of the reports


    echo "</div>";
}



?>


</body>

</html>