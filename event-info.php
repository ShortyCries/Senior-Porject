<?php 

// 'courtID': courtID,
// 'eventID': eventID,

session_start();
require_once("config.php");

$playerEmail = $_SESSION['email'];

if (isset($_POST['courtID'], $_POST['eventID'])) {

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

    $courtID = $_POST['courtID'];

    $eventID = $_POST['eventID'];

    $query = "SELECT * FROM courts NATURAL JOIN events WHERE CRid = Evcourtid AND Eid = '$eventID'";

    $result = $pdo->query($query);

    $row = $result->fetch(PDO::FETCH_NUM);

    //SELECT rolid, number FROM need WHERE eventid = '32';
    
    $query2 ="SELECT rolid, Rname, number FROM need NATURAL JOIN role WHERE eventid = '$eventID' AND rolid = Rid";

    $result2 = $pdo->query($query2);


    $r2 = $result2->rowCount();

    $query5 = "SELECT name FROM player NATURAL JOIN events WHERE playeremail = email AND Eid = '$eventID'";

    $result5 = $pdo->query($query5);

    $row5 = $result5->fetch(PDO::FETCH_NUM);




        
    echo "<div class=\"container\">";
    echo "<div class=\"info-section\"><span class=\"label\">Creator:</span><span class=\"content\">" . htmlspecialchars($row5[0], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Title:</span><span class=\"content\">" . htmlspecialchars($row[16], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Description:</span><span class=\"content\">" . htmlspecialchars($row[17], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">City:</span><span class=\"content\">" . htmlspecialchars($row[1], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Location:</span><span class=\"content\">" . htmlspecialchars($row[2], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Court name:</span><span class=\"content\">" . htmlspecialchars($row[3], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Court size:</span><span class=\"content\">" . htmlspecialchars($row[4], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Price:</span><span class=\"content\">" . htmlspecialchars($row[8], ENT_QUOTES, 'UTF-8') . "$/hour</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Sport:</span><span class=\"content\">" . htmlspecialchars($row[6], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Capacity:</span><span class=\"content\">" . htmlspecialchars($row[7], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Date:</span><span class=\"content\">" . htmlspecialchars($row[13], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Time:</span><span class=\"content\">" . htmlspecialchars($row[14], ENT_QUOTES, 'UTF-8') . "</span></div>";
    echo "<div class=\"info-section\"><span class=\"label\">Roles Requested:</span><span class=\"content\">";
     for($i = 0; $i< $r2; $i++){
        
        $row2 = $result2->fetch(PDO::FETCH_NUM);
        if (!is_null($row2[2]) && $row2[2] != 0) {
            echo "(";
            echo htmlspecialchars($row2[2], ENT_QUOTES, 'UTF-8');
            echo ")";
            echo htmlspecialchars($row2[1], ENT_QUOTES, 'UTF-8');
            echo "<br>";
        }
}
      "</span></div>";





    echo "</div>";





   


       

        
}



?>