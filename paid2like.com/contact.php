<?php
include 'checklogin.php';
include 'profile.php';
include 'head.php';
if (isset($_POST['send'])){
	$date = date("d-m-Y");
	$time = date("h-i");
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$sql_add = 	"INSERT INTO contact".
			"(name,email,date,time,subject,other) ".
			"VALUES ".
			"('$uname','$email','$date','$time','$subject','$message')";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql_add, $conn );
	
	}

?>

	<div id=contain>
		<h2>
		Contact Us:-
		</h2>
		<?php
		if (isset($_POST['send'])){
		echo "<font color=blue>Your Message Sent</font>";
		}
		?>
		<p><form action="contact.php" method="POST">
		<table cellspacing="10px">
		
		<tr><td width=200px>Your UserName:-</td><td> <input type=text name=uname value="<?php echo $uname; ?>"> </td></tr>
		<tr><td width=200px>Your Email Address:-</td><td> <input type=text name=email value="<?php echo $email; ?>"> <!--<a href="">Change Email</a>--></td></tr>
		<tr><td width=200px>Subject:-</td><td> <input type=text name=subject size="59"> </td></tr>
		<tr><td width=200px>Your Message:-</td><td> <textarea name=message cols=50 rows=10></textarea><!-- <a href="">Change Password</a>--></td></tr>
		<tr><td></td><td><input type=submit value="Send Message" name=send></td></tr>
		
		</table>
		</form>
		</p>
	</div>
	<div id=right>
		<h2>
		Your Credits</h2>
		<div id="credits">
		<?php if (isset($_SESSION['username'])) {echo $credits;} ?>
		</div>
		<h2>
		Your Money(Rs.)</h2>
		<div id="credits">
		Rs. <?php if (isset($_SESSION['username'])) {echo $money;} ?>/-
		</div><hr color=green>
		<p>
			<?php
		if (isset($_SESSION['username'])) {
			
			echo"EVERY TIME YOUR CONTENT GETS LIKED, FOLLOWED, VIEWED, SUBSCRIBED, +1, YOU LOSE CREDITS. IF YOU RUN OUT OF CREDITS, YOU WILL NO LONGER RECEIVE PROMOTIONS. YOU CAN ALWAYS EARN MORE FREE CREDITS ON OUR EARN PAGES OR YOU CAN BUY IT.";
		}
		else {
			echo "recent recharges";
			}
		?>
		
		</p>
		
	</div>
<?php
include 'foot.php';
$page = "contact.php";
$sql_hitg = "SELECT * FROM mm WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitg,$conn);
while($row = mysql_fetch_array($retval)){
	$old_hit = $row['hit'];
	}
$new_hit = $old_hit+1;
$sql_hitp = "UPDATE mm SET hit='$new_hit' WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query($sql_hitp,$conn);
?>
