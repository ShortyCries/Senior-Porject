<?php
session_start();
require_once("config.php");

$academyEmail = $_SESSION['email'];
try {


    if (isset($_POST['className'], $_POST['capacity'])) {
        echo "hello";
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);

        extract($_POST);

        $schedule = "";


        foreach ($days as $day) {
            $schedule .= $day . " ";
        }

        $schedule .= $timing . "-" . $timing1;

        $MYTIMINGPLEASE = $timing . "-" . $timing1;


        $query = "SELECT schedule FROM class WHERE coachemail ='$coach'";

        $result = $pdo->query($query);

        $row = $result->fetchALL(PDO::FETCH_COLUMN);



        function isOverlap($array, $string)
        {
            list($str_start, $str_end) = explode('-', $string);

            foreach ($array as $item) {
                list($start, $end) = explode('-', $item);

                // Check if the time ranges overlap
                if ((strtotime($str_start) < strtotime($end)) && (strtotime($str_end) > strtotime($start))) {
                    return true; // Overlap found
                }
            }

            return false; // No overlap found
        }


        function extractLetters($input)
        {
            // Regular expression to match sequences of letters separated by spaces
            preg_match_all('/\b[A-Za-z]+\b/', $input, $matches);

            // Filter out the matched letters only
            $letters = array_filter($matches[0], function ($match) {
                return preg_match('/^[A-Za-z]+$/', $match);
            });

            return $letters;
        }

        function extractLettersFromArray($array)
        {
            $result = [];
            foreach ($array as $string) {
                $result[] = extractLetters($string);
            }
            return $result;
        }

        $string = $schedule;




        $allLetters = extractLettersFromArray($row);
        print_r($allLetters);
        $myarray = [$string];
        $myletters = extractLettersFromArray($myarray);
        print_r($myletters);








        $flatArray1 = array_merge(...$allLetters);
        $flatArray2 = array_merge(...$myletters);

        // Find the intersection
        $commonElements = array_intersect($flatArray1, $flatArray2);



        // Check if there are any common elements
        if (!empty($commonElements)) {
            echo "There are common elements: ";
            $time_pattern = '/\b\d{2}:\d{2}-\d{2}:\d{2}\b/';

            // Array to store extracted timings
            $timings = [];
            foreach ($row as $input_string) {
                // Use preg_match to find the time portion
                preg_match($time_pattern, $input_string, $matches);

                // Check if a match is found
                if (!empty($matches)) {
                    // Extracted time is in $matches[0]
                    $time = $matches[0];
                    // Store extracted time in the timings array
                    $timings[] = $time;
                }
            }

            // Check for overlap with each timing
            foreach ($timings as $timing) {
                if (isOverlap([$timing], $MYTIMINGPLEASE)) {
                    $_SESSION['status'] = 'OOPS! Looks like the coach has a class at that time!';
                    header("location:academy-Classes.php");
                    exit();
                }
            }
        }





        $query = "INSERT INTO class VALUES( '' ,'$className', '$sport', '$academyEmail', '$coach', '$capacity', '$schedule')";

        $result = $pdo->exec($query);


        if ($result) {
            $_SESSION['status'] = "Class created successfully";
            header("location:academy-Classes.php");
        } else {
            $_SESSION['status'] = "Class creation was unsuccessful";
            header("location:academy-Classes.php");
        }
    }
} catch (PDOException $e) {
    $_SESSION['status'] = "Class creation was unsuccessful";
    header("location:academy-Classes.php");
    
}
