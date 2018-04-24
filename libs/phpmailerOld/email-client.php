<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();



//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "andreyzf20@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "andreayzf";

//Set who the message is to be sent from
$mail->setFrom('andreyzf20@gmail.com', 'Andrea zambrano');

//Set an alternative reply-to address
$mail->addReplyTo('andreyzf20@gmail.com', 'Andrea Zambrano');

//Set who the message is to be sent to
$address'andreyzf20@gmail.com';
$mail­>AddAddress($address, "Levle Up");

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Hola que tal, esto es el cuerpo del mensaje!");

//Replace the plain text body with one created manually
$mail->AltBody = '<div align="center" style="background-color:#f6f8f8;">
        <div align="center" style="display:inline-block;
                                  height:auto;
                                  width:100%;">
          <div style="
             background-color:#e44c2a;
             display:inline-block;
             width:100%;
             height:auto;
             text-align:center;
             color:#fff;
             align-content:center;
             ">
            <div align="center" style="padding:10px;" >
              <img src="http://sohigh.com.ve/levelup/assents/images/logo-rentit.png">
            </div>
          </div>

          <div style="color:#e44c2a; padding:20px;" align="left">
            <br/>
            Rentadora de autos, lEVEL UP  :   <b>'.$_POST['name'].'</b>.
            

                    
          </div>
          
          <div style="border-radius:10px; width: 320PX; box-shadow:5px 5px 17px 0px rgba(44, 50, 50, 0.14);">
            <table style=" color: #4a4646; margin:0px; padding:20px; max-width:300px;">
              <tr>
                <td style="color: rgb(246, 248, 248);"> Email:
                </td>
                <td><h3>Mensaje de cliente</h3>
                </td>
              </tr>
              <tr>
               <td>Nombre:</td><td><h3>'.$_POST['name'].
               '</h3>
               </td>
              </tr>
              <tr>
               <td>Email:</td><td><h3>'.$_POST['email'].
               '</h3>
               </td>
              </tr>
              <tr>
               <td>Mensaje:</td><td><h3>'.$_POST['message'].
               '</h3>
               </td>
              </tr>
            </table>
          </div>

         

          <div style="height:30px;">
          </div>
          
    
        </div>
      </div> ' ;

//Attach an image file
$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Error al enviar: " . $mail->ErrorInfo;
} else {
    echo "Mensaje enviado!";
}








