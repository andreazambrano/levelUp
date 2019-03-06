<?php
require 'PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available <br/>";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'thetixs.com';       //  ssl://smtp.gmail.com          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'support@thetixs.com';                      // SMTP username
$mail->Password = 'uoW9ANAHG';                           // SMTP password
$mail->SMTPSecure = 'ssl';  //TLS                       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;          //587                          // TCP port to connect to


//echo $email= $_POST['n2']."@".$_POST['n3'];
$mail->setFrom('support@thetixs.com', 'Restaurante Salsa Mora [Contacto]');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('andreyzf20@gmail.com');              // Name is optional
//$mail->addReplyTo('$email','roshan');
//$mail->addCC('passmethecode@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Mensaje de cliente';
$mail->Body    = 
   
    '<div align="center" style="background-color:#f6f8f8;">
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
              <img src="http://sohigh.com.ve/salsamora2/images/logo.png">
            </div>
          </div>

          <div style="color:#e44c2a; padding:20px;" align="left">
            <br/>
            Restaurante Salsa Mora, Te escribe  :   <b>'.$_POST['name'].'</b>.
            

                    
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
               <td>Email:</td><td><h3>'.$_POST['email'].
               '</h3>
               </td>
              </tr>
              <tr>
               <td>telefono:</td>
               <h3>'.$_POST['phone'].'</h3>
               </td>
              </tr>
              <tr>
               <td>Asunto:</td><td><h3>'.$_POST['subjects'].
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
      </div>
 ';
//file_get_contents('template-guest.php');
// $mail->AltBody = 'Hello';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
// header('location: thankyou.php');
}
?>
