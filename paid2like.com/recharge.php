
<?php
include 'checklogin.php';
include 'profile.php';
include 'head.php';

if (isset($_POST['convert'])) {
	$get_credits = $_POST['credits'];
	$get_new = $credits - $get_credits;
	$con_rupis = $get_credits/50;
	$con_new = $money + $con_rupis;
	$sql_get = "UPDATE user
				SET credits='$get_new'
				WHERE uname='$uname'";
				mysql_select_db($dbname);
				mysql_query($sql_get, $conn);
	$sql_con = "UPDATE user
				SET money='$con_new'
				WHERE uname='$uname'";
				mysql_select_db($dbname);
				mysql_query($sql_con, $conn);
	}
?>

<?php
if (isset($_GET['states'])){
	if ($_GET['states'] == 'sucess'){
	echo "<script> alert('We Got Your Request We will Prosess Your Request in 24 hour. When Your recharge will done your money will be dedacted.');</script>";	
	}
}
?>


	<div id=contain>
		<h2>
		Recharge Your Mobile:-
		</h2>
		<p>
		<p id=message>IN ORDER TO GET RECHARGE ON YOUR MOBILE NUMBER YOU MUST HAVE MINIMUM "500 CREDITS". IF YOU HAVE MORE THAN 500 CREDITS YOU CAN CONVERT IT INTO INDIAN Rs. THE CONVERSION RATE IS 500 CREDITS=10 Rs.</p>
		<br><?php
		if (isset($_GET['states'])){
				if ($_GET['states'] == 447){
					echo "<script>alert('You have enterd credits more then you have');</script>";
					}
				if ($_GET['states'] == 'con_sucess'){
					echo "<script>alert('convert sucessful');</script>";
					}
			}
		if ($credits >= 500){
			echo "Congres You have {$credits} Credits You can convert Them into Indian Rs.";
			}
		?><center><h2 id=main_sub>Convert Credits into rupees</h2></center>
		<form action="admin/con_get.php" method=POST><table cellspacing="10px" header=Convert>
		<tr><td width=>Credits To convert:-</td><td> <input type=text size=10 name=credits value="<?php echo $credits; ?>"> INTO </td><td>------->Rs.</td><td><input type=submit value="Convert now" name=convert></td></tr>
		</table>
		</form>
		<h2 id=main_sub>Recharge Now:</h2>
		<form action="admin/do_recharge.php" method="POST">
		<table cellspacing=10px>
		<tr><td width=250px>Enter Mobile Number:</td><td><input type=text name=mo_number></td></tr>
		<tr><td>Enter Recharge Amount:</td><td><input type=text name=mo_amount> Minimum Rs.10/-</td></tr>
		<tr><td>Select Operator:</td><td> 
<select name="mo_sim">
<option value="Airtel">Airtel</option>
<option value="Airtel">Aircel</option>
<option value="BSNL">BSNL</option>
<option value="Idea">Idea</option>
<option value="Loop">Loop Mobile</option>
<option value="MTNL">MTNL</option>
<option value="MTS">MTS</option>
<option value="Reliance">Reliance CDMA</option>
<option value="Reliance">Reliance GSM</option>
<option value="Tata">Tata Docomo</option>
<option value="Indicom">Tata Indicom</option>
<option value="Virgin">Virgin CDMA</option>
<option value="Virgin">Virgin GSM</option>
<option value="Vodafone">Vodafone</option>
<option value="Uninor">Uninor</option>
<option value="Videocon">Videocon</option>
</select>
</td></tr>
<tr><td>Select State:</td><td> 
<select name="mo_state">
<option value="Andhra">Andhra Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar"> &amp; Jharkhand</option>
<option value="Chennai">Chennai</option>
<option value="Delhi">Delhi &amp; NCR</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal">Himachal Pradesh</option>
<option value="Jammu">Jammu &amp; Kashmir</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Kolkata">Kolkata</option>
<option value="Maharashtra">Maharashtra &amp; Goa ( Except Mumbai)</option>
<option value="Mp">Mp &amp; Chattisgarh</option>
<option value="Mumbai">Mumbai</option>
<option value="North">North East</option>
<option value="Orissa">Orissa</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Tamilnadu">Tamilnadu</option>
<option value="UP">UP (EAST)</option>
<option value="UPW">UP(WEST) &amp; Uttarakhand</option>
<option value="Bengal">West Bengal</option>
</select>
</td></tr>
<tr><td></td><td><input type=submit name=mo_submit value="Request Recharge"</td></tr>
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
		</div>
		<hr color=green>
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
$page = "recharge.php";
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
