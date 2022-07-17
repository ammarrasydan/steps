<?php
require('conn.php');
$id = $_GET['id'];
$status= $_GET['status'];
$email= $_GET['email'];

	$sql = "UPDATE email set status='$status' WHERE id='$id'";
	$result = $conn->query($sql);
    
    //link ke page semakan
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ammarwmr@gmail.com';
    $mail->Password = 'ammar1303';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Recipients
    $mail->setFrom('ammarwmr@gmail.com', 'MJ Physiotherapy & Spa');
    $mail->addAddress($_GET['email']);

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Reservation accepted!';
    $mail->Body    = 'Thank you. Your recently reservation was accepted.Please take note your reservation date.';

    $mail->send();
    echo 'Message has been sent';
    header("location:daftar_ahli.php");

} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("location:daftar_ahli.php");
}
?>