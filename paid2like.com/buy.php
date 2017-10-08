<?php
include 'checklogin.php';
include 'profile.php';
include 'head.php';


?>

	<div id=contain>
		<h2>
		Buy Credits:-
		</h2>
		<a href="https://www.payumoney.com/paybypayumoney/#/8271">
		<div id=buy_box>
		<p id=buy_head>Plan 1</p>
		<hr color=green>
		<p id=buy_credits>Credits: 1000</p>
		<p id=buy_money>Rs.50/-</p>
		<p id=buy_money>Payment:<li id=buy_payment>Mobikwik Payment</li> <li id=buy_payment>Paypal</li></p>
		<p id=buy_buy>Buy Now</p>
		</div></a>
		<a href="https://www.payumoney.com/paybypayumoney/#/8269">
		<div id=buy_box>
		<p id=buy_head>Plan 2</p>
		<hr color=green>
		<p id=buy_credits>Credits: 10000</p>
		<p id=buy_money>Rs.400/-</p>
		<p id=buy_money>Payment:<li id=buy_payment>Mobikwik Payment</li> <li id=buy_payment>Paypal</li></p>
		<p id=buy_buy>Buy Now</p>
		</div></a>
		
		<a href="https://www.payumoney.com/paybypayumoney/#/7E07E56B5562F8833EC28F86D07A7FB1">
		<div id=buy_box>
		<p id=buy_head>Plan 3</p>
		<hr color=green>
		<p id=buy_credits>100000</p>
		<p id=buy_money>Rs.3500/-</p>
		<p id=buy_money>Payment:<li id=buy_payment>Mobikwik Payment</li> <li id=buy_payment>Paypal</li></p>
		<p id=buy_buy>Buy Now</p>
		</div></a>
		
		
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
$page = "buy.php";
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
