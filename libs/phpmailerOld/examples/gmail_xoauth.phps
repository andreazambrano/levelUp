<?php
include "class.phpmailer.php";
include "class.smtp.php";
$email_user = "andreyzf20@gmail.com";
$email_password = "andreayzf";
$the_subject = "Phpmailer prueba by levelup.com";
$address_to = "andreazambrano10@gmail.com";
$from_name = "levelUp";
$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $andrea;
$phpmailer->Password = $andreayzf; 
//-----------------------------------------------------------------------
$phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom($phpmailer->andrea ,$levelUp);
$phpmailer->AddAddress($sndreazambrano10@gmail.com); // recipients email
$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
$phpmailer->Send();
?>