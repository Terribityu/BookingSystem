<?php
include ('connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

extract($_POST);
if(isset($viewDest)){
	$id = $viewDest;
	$query = "SELECT * FROM destination WHERE destID = $id";
	$result = mysqli_query($connection , $query);
	$row = mysqli_fetch_array($result);
	if (($pos = strpos($row['destTrailer'], "=")) !== FALSE) { 
		$row['destTrailer'] = "https://www.youtube.com/embed/".substr($row['destTrailer'], $pos+1); 
	}
	echo json_encode($row);
}	

if(isset($close)){
	session_start();
	session_destroy();
}

if(isset($verifyotp)){
	session_start();
	if($verifyotp == $_SESSION['otp']){
		echo true;
	}else{
		echo false;
	}
}

if(isset($btncontact)){
	$query = "INSERT INTO clienttickets VALUES(null,'$name','$email','$message')";
	mysqli_query($connection , $query);
}	

if(isset($_GET['booknew'])){
	$query = "INSERT INTO bookings VALUES(null,'$fname','$lname','$email', '$nums', '$destid', now())";
	mysqli_query($connection , $query);

	$query2 = "SELECT * FROM destination WHERE destID = '$destid'";
	$result = mysqli_query($connection, $query2);
	$row = mysqli_fetch_array($result);


	$inclu = $row['destInclu'];

	  if($inclu[1].$inclu[2] == "O1"){
		$transport = "Roundtrip Airfare via Philippines Airline";
	  }else if($inclu[1].$inclu[2] == "O2"){
		$transport = "One-way Trip Airfare via Philippines Airline";
	  }
	  
	  if($inclu[4].$inclu[5] == "O3"){
		$accomodation = "1 night accomodation";
	  }else if($inclu[4].$inclu[5] == "O4"){
		$accomodation = "2 nights accomodation";
	  }
	
	  if($inclu[7].$inclu[8] == "O5"){
		$food = "Daily Breakfast, Dinner";
	  }else if($inclu[7].$inclu[8] == "O6"){
		$food = "Daily Breakfast,Lunch,Dinner";
	  }
	  
	  if($inclu[10].$inclu[11] == "O7"){
		$tour = "Tour guide and transportation";
	  }else if($inclu[10].$inclu[11] == "O8"){
		$tour = "First day hotel pickup and guide";
	  }
	    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'vendor/autoload.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'readysettravelph@gmail.com';                     //SMTP username
    $mail->Password   = 'fpgoezpsjuavualb';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('readysettravelph@gmail.com', 'Ready, Set, GALA!');
    // $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($email);               //Name is optional
    $mail->addReplyTo('readysettravelph@gmail.com', 'Ready, SET, GALA!');
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ready, Set, GALA! Booking Receipt';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
    <meta charset="utf8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Your reservation is now confirmed</title>
    <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--<![endif]-->
    <!--[if mso]>
    <xml>
    <o:OfficeDocumentSettings>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
    </xml>
    <style>
    table {border-collapse: collapse;}
    td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
    </style>
    <![endif]-->
    <style>
    @media screen {
    img {
    max-width: 100%;
    }
    td,
    th {
    box-sizing: border-box;
    }
    u~div .wrapper {
    min-width: 100vw;
    }
     a[x-apple-data-detectors] {
    color: inherit;
    text-decoration: none;
    }
    .all-font-roboto {
    font-family: Roboto, -apple-system, "Segoe UI", sans-serif !important;
    }
    .all-font-sans {
    font-family: -apple-system, "Segoe UI", sans-serif !important;
    }
    }
    @media (max-width: 600px) {
    .sm-inline-block {
    display: inline-block !important;
    }
    .sm-hidden {
    display: none !important;
    }
    .sm-leading-32 {
    line-height: 32px !important;
    }
    .sm-p-20 {
    padding: 20px !important;
    }
    .sm-py-12 {
    padding-top: 12px !important;
    padding-bottom: 12px !important;
    }
    .sm-text-center {
    text-align: center !important;
    }
    .sm-text-xs {
    font-size: 12px !important;
    }
    .sm-text-lg {
    font-size: 18px !important;
    }
    .sm-w-1-4 {
    width: 25% !important;
    }
    .sm-w-3-4 {
    width: 75% !important;
    }
    .sm-w-full {
    width: 100% !important;
    }
    }
    </style>
    <style>
    @media (max-width: 600px) {
    .sm-dui17-b-t {
    border: solid #4299e1;
    border-width: 4px 0 0;
    }
    }
    </style>
    </head>
    <body style="box-sizing: border-box; margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #f5dbce;">
    <div style="display: none; line-height: 0; font-size: 0;">Hey Jamie, thanks for booking with us - your reservation is now confirmed ✔</div>
    <table class="wrapper all-font-sans" width="100%" height="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td align="center" style="padding: 24px;" width="100%">
    <table class="sm-w-full" width="600" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td colspan="2" class="sm-inline-block" style="display: none;">
    <img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=600&h=400&q=80&fit=crop" alt="Double Room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-top-right-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);">
    </td>
    </tr>
    <tr>
    <td class="sm-hidden" style="padding-top: 40px; padding-bottom: 40px;" width="160">
    <img src="https://images.unsplash.com/photo-1505577058444-a3dab90d4253?ixlib=rb-0.3.5&s=fed02ccbe457c9b8fc1f2cf76f30d755&w=320&h=800&q=80&fit=crop" alt="Double room" style="border: 0; line-height: 100%; vertical-align: middle; border-top-left-radius: 4px; border-bottom-left-radius: 4px; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);" width="160">
    </td>
    <td align="left" class="sm-p-20 sm-dui17-b-t" style="border-radius: 2px; padding: 40px; position: relative; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05); vertical-align: top; z-index: 50;" bgcolor="#ffffff" valign="top">
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td width="80%">
    <h1 class="sm-text-lg all-font-roboto" style="font-weight: 700; line-height: 100%; margin: 0; margin-bottom: 4px; font-size: 24px;">Customer Receipt</h1>
    <p class="sm-text-xs" style="margin: 0; color: #a0aec0; font-size: 14px;">Your reservation is now confirmed</p>
    </td>
    <td style="text-align: right;" width="20%" align="right">
    <a href="https://example.com" target="_blank" style="text-decoration: none;">
    <img src="https://image0.flaticon.com/icons/png/128/872/872220.png" alt="Download PDF" style="border: 0; line-height: 100%; vertical-align: middle; font-size: 12px;" width="24">
    </a>
    </td>
    </tr>
    </table>
    <div style="line-height: 32px;">&zwnj;</div>
    <table class="sm-leading-32" style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td class="sm-inline-block" style="color: #718096;" width="50%">Guest</td>
    <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$fname.' '.$lname.'</td>
    </tr>
    <tr>
    <td class="sm-inline-block" style="color: #718096;" width="50%">Quantity</td>
    <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$nums.'</td>
    </tr>
    <tr>
    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Destination</td>
    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$row['destName'].'</td>
    </tr>
    </table>
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td style="padding-top: 24px; padding-bottom: 24px;">
    <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
    </td>
    </tr>
    </table>
    <table style="font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td class="sm-inline-block" style="color: #718096;" width="50%">Air Transport</br></br></td>
    <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$transport.'</br></br></td>
    </tr>
    <tr>
    <td class="sm-inline-block" style="color: #718096;" width="50%">Accomodation</br></br></td>
    <td class="sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$accomodation.'</br></br></td>
    </tr>
    <tr>
    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Foods</br></br></td>
    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$food.'</br></br></td>
    </tr>
    <tr>
    <td class="sm-w-1-4 sm-inline-block" style="color: #718096;" width="50%">Tour guide and transportation</td>
    <td class="sm-w-3-4 sm-inline-block" style="font-weight: 600; text-align: right;" width="50%" align="right">'.$tour.'</td>
    </tr>
    </table>
    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td style="padding-top: 24px; padding-bottom: 24px;">
     <div style="background-color: #edf2f7; height: 2px; line-height: 2px;">&zwnj;</div>
    </td>
    </tr>
    </table>
    <table style="line-height: 28px; font-size: 14px;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
    <td style="font-weight: 600; padding-top: 32px; color: #000000; font-size: 20px;" width="50%">Total</td>
    <td style="font-weight: 600; padding-top: 32px; text-align: right; color: #68d391; font-size: 20px;" width="50%" align="right">₱'.$nums*$row['destPrice'].'</td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </body>
    </html>
    <!-- partial -->
    <div style="color: #7f87a7; line-height: 140%; text-align: center; word-wrap: break-word;">
        <p style="font-size: 14px; line-height: 140%;">&copy; Ready, Set, GALA! 2022 All Rights Reserved</p>
      </div>
    </body>
    </html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>