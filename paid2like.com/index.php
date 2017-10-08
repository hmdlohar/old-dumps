<?php
session_start();
include 'profile.php';
include 'head.php';

?>
	<div id=contain>
		<h2>
		
		</h2><font size=+2 color=green>Facebook Like Exchange</font>
		<p><img src=img/fb_icon.jpg><br>
		Facebook has become one of the most visited websites on the Internet and now it has over 600 million users with over 50% of these users logging in daily. Facebook allows businesses, artists and others to promote their services or products with a fan page. You may already have a "Fan Page", but how can you get people interested in your services or products without fans..? <br><br>
		</p>
		<font size=+2 color=green>Paid2Like is hear to increase your fans</font><br>
		<p>
		We invite peoples to like your page and we give them Paid2Like Credits. Thay can Use Credits For Getting likes on them page or thay can get Mobile Recharge by converting Credits into money.
		</p>
		<font size=+2 color=green>Why we provide Free Recharge??</font><br>
		<p>
		We have advertisers who want fans on their page thay give us money to get likes on their facebook page and we give you credits for it which is basically money. You can convert credits and get recharge from it.
		</p>
		
		
		<?php
		if (!isset($_SESSION)){
		echo "<font size=+2 color=green>Get Started Now:</font><p>	
		<center><div id=buy_buy>SignUp Now</div></center>
		</p>"; }
		?>
	</div>
	<div id=right><?php if (isset($_SESSION['username'])) { ?>
		<h2>
		Your Credits</h2>
		<div id="credits">
		<?php echo $credits; ?>
		</div>
		<h2>
		Your Money(Rs.)</h2>
		<div id="credits">
		Rs. <?php if (isset($_SESSION['username'])) {echo $money;} ?>/-
		</div><hr color=green>
		<p>
			<?php
					

			echo"EVERY TIME YOUR CONTENT GETS LIKED, FOLLOWED, VIEWED, SUBSCRIBED, +1, YOU LOSE CREDITS. IF YOU RUN OUT OF CREDITS, YOU WILL NO LONGER RECEIVE PROMOTIONS. YOU CAN ALWAYS EARN MORE FREE CREDITS ON OUR EARN PAGES OR YOU CAN BUY IT.";
		}
		else {
			echo "<h2>
		Recent Recharges</h2><div id='credits'> </div>
		<h2>
		</h2>
		<div id='credits'>
		</div><hr color=green>";
		$sql_445 = "SELECT * FROM recharge WHERE type='done' LIMIT 3";
		mysql_select_db($dbname);
		$retval = mysql_query($sql_445, $conn);
		while($row = mysql_fetch_array($retval)){
		echo "
		<div id=rec_box>
		<table>
		<tr> <td id=rec_cet width=100px>Mobile No.:</td><td id=rec_det>{$row['number']}</td></tr>
		<tr> <td id=rec_cet width=100px>Amount:</td><td id=rec_det>{$row['amount']}</td></tr>
		<tr> <td id=rec_cet width=100px>Operator:</td><td id=rec_det>{$row['state']}</td></tr>
		</table>
		</div>";
			}
			}
		?>
		
		
		
	</div>
<?php
include 'foot.php';
$page = "index.php";
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



