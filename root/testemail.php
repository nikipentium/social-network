<?php
error_reporting(E_ALL);
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2; 
$mail->From = "nikipentium@gmail.com";
$mail->FromName = "Nikhil";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 587; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "nikhil.pereira.177@gmail.com"; // SMTP username
$mail->Password = "PleaseHelp@god"; // SMTP password
$mail->AddAddress("nikhil.pereira.177@gmail.com", "PleaseHelp@god"); //replace myname and mypassword to yours
$mail->AddReplyTo("nikhil.pereira.177@gmail.com", "PleaseHelp@god");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'test';
$mail->Body = 'test';

if($mail->Send()) {echo "Send mail successfully";}
else {echo "Send mail fail";} 
?>
