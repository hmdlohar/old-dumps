<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

if(isset($_GET['useremail'])){
	$userEmail=$_GET['useremail'];
}else{
	$userEmail="hmdlohar@gmail.com";
}
if(isset($_GET['username'])){
	$userEmail=$_GET['username'];
}else{
	$userName="Dear User";
}


require '../PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;

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
$mail->Username = "hmdlohar2@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "hamid445";

//Set who the message is to be sent from
$mail->setFrom('hmdscraft@gmail.com', 'Hmd\'s Craft');

//Set an alternative reply-to address
$mail->addReplyTo('hmdscraft@gmail.com', 'Hmd\'s Craft');

//Set who the message is to be sent to
$um=explode(",",$userEmail);
for($x=0;$x<sizeof($um);$x++){
	$mail->addAddress("{$um[$x]}", "{$userName}");
}


//Set the subject line
$mail->Subject = 'Get Some Beautiful Things for your Loving Persons';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('../contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'Here is our hardwork to make yourself beautiful. We are introducing you to our online handicraft shop';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "1";
}