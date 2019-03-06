<?php
require 'PHPMailerAutoload.php';
echo !extension_loaded('openssl')?"Not Available":"Available <br/>";
$mail = new PHPMailer;
$myValue1 = $_REQUEST['password'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'thetixs.com';       //  ssl://smtp.gmail.com          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'support@thetixs.com';                      // SMTP username
$mail->Password = 'uoW9ANAHG';                           // SMTP password
$mail->SMTPSecure = 'ssl';  //TLS                      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;          //587                          // TCP port to connect to


//echo $email= $_POST['n2']."@".$_POST['n3'];
$mail->setFrom('support@thetixs.com', 'The|tixs [Support]');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('andreyzf20@gmail.com');               // Name is optional
//$mail->addReplyTo('$email','roshan');
//$mail->addCC('passmethecode@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Account activate';
$mail->Body    = 
   
    ' <div align="center" style="background-color:#f6f8f8;"><div align="center" style="
    display:inline-block;
    
    height:auto;
    width:100%;
    ">
       <div style="
       background-color:rgb(10, 62, 240);
       display:inline-block;
       width:100%;
       height:100px;
       text-align:center;
       color:#fff;
       align-content:center;
       "><h1 style="
       margin-top:40px;
       ">The|tixs </h1>
       
       </div>
       <div style="color:#4a4646; padding:20px;" align="left">
       <br/>
       Dear <b>'.$_POST['name'].'</b>,
       
       Your partner account has been created successfully
         
       </div>

       <table style=" color: #4a4646; margin:0px; padding:20px; width:320px;">
      <tr>
        <td style="color: rgb(246, 248, 248);">Email_:
        </td>
        <td><h3>Info Account</h3>
        </td>
      </tr>
      <tr>
       <td>Email:</td><td><h3>'.$_POST['email'].
       '</h3>
       </td>
      </tr>
      <tr>
       <td>Pass:</td>
       <td><h3>'.$_POST['password'].'</h3>
       </td>
      </tr>
    </table>
     <div align="center" >
        <img src="http://sohigh.com.ve/tixs/img/logo.png">
       </div>
    <div text-align="center" style="
    background-color:rgb(109, 160, 212);
    padding:5px;
    border-radius: 15px;
    height:auto;
    overflow:hidden;
    width:300px;
    " >
    <h4 style="color:#fff;  ">Support Team, <a href="http://thetixs.com" style="color:#fff;">The|Tixs</a></h4></div>
    </div></div>';
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
