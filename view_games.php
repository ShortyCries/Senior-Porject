<?php
session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];


if (isset($_POST['class_id'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $classID = $_POST['class_id'];

    $query1 = "SELECT 
    m.Mid,
    c1.Cname AS team1_name,
    c2.Cname AS team2_name,
    cr.CRname AS court_name,
    cr.CRlocation AS court_location,
    m.Mdate,
    m.Mtime,
    m.Mtype,
    m.Mstatus,
    m.team1Score,
    m.team2Score
FROM 
    matchs m
JOIN 
    class c1 ON m.team1 = c1.id
JOIN 
    class c2 ON m.team2 = c2.id
JOIN 
    courts cr ON m.Mcourtid = cr.CRid
WHERE 
    m.team1 = '$classID' OR m.team2 = '$classID';
";

    $result1 = $pdo->query($query1);

    $r1 = $result1->rowCount();

    echo '  <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Matches</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Team1</th>
                                <th scope="col">Team2</th>
                                <th scope="col">Court</th>
                                <th scope="col">City</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Type</th>
                                <th scope="col">T1 Score</th>
                                <th scope="col">T2 Score</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>


                </div>
            </div>
        </div>
    </div>
</div>

<tbody>';

 

    for ($i = 0; $i < $r1; $i++) {
        $row1 = $result1->fetch(PDO::FETCH_NUM);

        echo '<tr>';

        echo "<td>" . $row1[0] ."</td>";
        echo "<td>" . $row1[1] ."</td>";
        echo "<td>" . $row1[2] ."</td>";
        echo "<td>" . $row1[3] ."</td>";
        echo "<td>" . $row1[4] ."</td>";
        echo "<td>" . $row1[5] ."</td>";
        echo "<td>" . $row1[6] ."</td>";
        echo "<td>" . $row1[7] ."</td>";
        echo "<td>" . $row1[9] ."</td>";
        echo "<td>" . $row1[10] ."</td>";
        echo "<td>" . $row1[8] ."</td>";

        echo '</tr>';
        
    }


 echo '</tbody>';

 echo '</table>';
}


?>