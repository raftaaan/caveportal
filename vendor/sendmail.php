<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';

function sendApprovedEmail($lastname, $fullname, $email) {
  $mail = new PHPMailer(true);

  $body ="<p>Dear $fullname,</p>
<p>Greetings of peace!</p>
<p>Your submitted application for Mr/Ms. $lastname has been Approved</p>
<p>For more information, you make check your verification application through the Centro Escolar University - Office of the Registrar Candidate Verification Portal.</p>
<p><b>This is an auto generated email please do not reply.</b></p>
<p>Thank you and stay safe.</p>";
try {
  //Server settings
  //Server settings
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;
   $mail->isSMTP();
   $mail->Host       = 'smtp.gmail.com';     //platform
   $mail->SMTPAuth   = true;
   $mail->Username   = 'ceumlscave@gmail.com';   //email
   $mail->Password   = 'gmvfujumrdqpsjgx';                                //password
   $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
   $mail->Port       = 587;

   //Recipients
   $mail->setFrom($mail->Username);       //sender
   $mail->addAddress($email);

   //Content
   $mail->isHTML(true);
   $mail->Subject = '(No reply) Candidate Verification Update';
   $mail->Body    = $body;             //content

   $mail->SMTPDebug  = SMTP::DEBUG_OFF;
   $mail->send();
   echo "message has been sent";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

function sendOnHoldEmail($lastname, $fullname, $status, $email) {
  $mail = new PHPMailer(true);

  $body ="<p>Dear $fullname,</p>
  <p>Greetings of peace!</p>
  <p>Your submitted application for Mr/Ms. $lastName has been placed On Hold</p>
  <p>For more information, you make check your verification application through the Centro Escolar University - Office of the Registrar Candidate Verification Portal.</p>
  <p><b>This is an auto generated email please do not reply.</b></p>
  <p>Thank you and stay safe.</p>";
  try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'ceumlscave@gmail.com';   //email
     $mail->Password   = 'gmvfujumrdqpsjgx';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom($mail->Username);       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = '(No reply) Candidate Verification Update';
     $mail->Body    = $body;             //content

     $mail->SMTPDebug  = SMTP::DEBUG_OFF;
     $mail->send();
     echo "message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

function sendDeniedEmail($lastname, $fullname, $status, $email) {
  $mail = new PHPMailer(true);

  $body ="<p>Dear $fullname,</p>
<p>Greetings of peace!</p>
<p>Your submitted application for Mr/Ms. $lastName has been Disapproved</p>
<p>For more information, you make check your verification application through the Centro Escolar University - Office of the Registrar Candidate Verification Portal.</p>
<p><b>This is an auto generated email please do not reply.</b></p>
<p>Thank you and stay safe.</p>";
  try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'ceumlscave@gmail.com';   //email
     $mail->Password   = 'gmvfujumrdqpsjgx';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom($mail->Username);       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = '(No reply) Candidate Verification Update';
     $mail->Body    = $body;             //content

     $mail->SMTPDebug  = SMTP::DEBUG_OFF;
     $mail->send();
     echo "message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

function sendInquiry($email) {
  $mail = new PHPMailer(true);

  $body ="<p>Greetings of peace!</p>
<p>You have successfully inquired for candidate verification</p>
<p>Please register a account on the link below to start the process. <a href='port-seventeen.com/caveportal/register.php'>Inquire An Account</a></p>
<p><b>This is an auto generated email please do not reply.</b></p>
<p>Thank you and stay safe.</p>";
  try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'ceumlscave@gmail.com';   //email
     $mail->Password   = 'gmvfujumrdqpsjgx';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom($mail->Username);       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = '(No reply) Candidate Verification Inquiry Account';
     $mail->Body    = $body;             //content


     $mail->SMTPDebug  = SMTP::DEBUG_OFF;
     $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

    //header
