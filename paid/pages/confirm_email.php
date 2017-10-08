<?php
$loged = isLoged();
if ($loged == 0){
	header("Location: {$site}/login.php");
	}else{
if($profile['other']==1){
	$confirm="none";$confirmed="block";
	}else{
		$confirm="block";$confirmed="none";
	
require_once "Mail.php";
if($profile['login_date']==""){
	$rand=  rand()%1000000;
	}else{
		$rand=$profile['login_date'];
		}

$sql = "UPDATE user SET login_date='$rand' WHERE username='$usernow'";
mysql_select_db($dbname);
$retval=mysql_query($sql, $conn);
if (!$retval){
	echo "Unexpreced Error. go back";
}

$fname=$profile['fname'];
$lname=$profile['lname'];

    require_once('pm5/class.phpmailer.php'); //library added in download source.
	    $msg  = "\t Hello {$fname} {$lname} <br><br> You are Now registred at Paid2like.com Please Confirm Your Email by entring this code \n Your Code Is =<b> {$rand}</b>";
    $subj = 'Confirm Email';
    if (isset($_POST['to'])){
    $to   = $_POST['to'];
}else{$to = "hmdlohar@gmail.com";}
    $from = "paid2likesme@gmail.com";
    $name = "Paid2Like";

    
    
    function smtpmailer($to, $from, $from_name = 'Example.com', $subject, $body, $is_gmail = true)
    {
        global $error;
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        if($is_gmail)
        {
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';  
            $mail->Username = 'paid2likesme@gmail.com';  
            $mail->Password = 'hamid445';   
        }
        else
        {
            $mail->Host = 'ssl://smtp.gmail.com';
            $mail->Username = 'hmdliker@gmail.com';  
            $mail->Password = 'hamid445';
        }
        $mail->IsHTML(true);
        $mail->From="paid2likesme@gmail.com";
        $mail->FromName="Paid2Like";
        $mail->Sender=$from; // indicates ReturnPath header
        $mail->AddReplyTo($from, $from_name); // indicates ReplyTo headers
        //$mail->AddCC('cc@site.com.com', 'CC: to site.com');
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error = 'Mail error: '.$mail->ErrorInfo;
            return true;
        }
        else
        {
            $error = 'Message sent!';
            return false;
        }
    }echo smtpmailer($to,$from, $name ,$subj, $msg);

}
}
	
	
?>

<div id=confirm style="display:<?php echo $confirm; ?>">
<span id=page_header>Confirm Email</span><br><br>
<p id=para>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please Enter Confirmation Code which is sent to your email <b> <?php echo $profile['email']; ?></b>.<br>
If You did not got the Email <a href=<?php echo $url; ?>/panel/email_resend.php>Click Here</a>
 </p>

<br>
<form action="<?php echo $url; ?>/pages/confirm_email2.php" method=POST>
<center>
<input type=text name=confirm_code value="Enter Code Here"><br>
<input type=submit value=confirm name=confirm>
</center>
</form>

</div>
<div id=confirmed style="display:<?php echo $confirmed; ?>">
You Have Confirmed Your Email <a href="<?php echo $url; ?>">Click Here</a> To Go to Home.
</div>