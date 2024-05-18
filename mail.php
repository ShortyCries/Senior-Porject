<?php


use PHPMailer\PHPMailer\PHPMailer;

use PHPMAILER\PHPMailer\Exception;



require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){

    $mail = new PHPMailer(true);


    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hossamemad39@gmail.com';
    $mail->Password = 'ipjd iiyq utwv pcob';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('hossamemad39@gmail.com');

    $mail->addAddress($_POST["email"]);


    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];

    $mail->Body = $_POST['name'] . "
    " . $_POST["message"];

    $mail->send();


    echo 

    "
    <script>
    alert(\"Sent Sucessfully\");
    document.location.href = 'contact.php';
    </script>
    ";


}


?>