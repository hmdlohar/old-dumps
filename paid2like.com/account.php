<?php
include 'checklogin.php';
include 'profile.php';
include 'head.php';


?>

	<div id=contain>
		<h2>
		Your Account Details:-
		</h2>
		<p>
		<table cellspacing="10px">
		<tr><td width=200px>First Name:-</td><td> <input type=text name=fname value="<?php echo $fname; ?>"> </td></tr>
		<tr><td width=200px>Last Name:-</td><td> <input type=text name=lname value="<?php echo $lname; ?>"> </td></tr>
		<tr><td width=200px>Your UserName:-</td><td> <input type=text name=uname value="<?php echo $uname; ?>"> </td></tr>
		<tr><td width=200px>Your Email Address:-</td><td> <input type=text name=email value="<?php echo $email; ?>"> <!--<a href="">Change Email</a>--></td></tr>
		<tr><td width=200px>Your Password:-</td><td> <input type=password name=pass value="<?php echo $password; ?>"><!-- <a href="">Change Password</a>--></td></tr>
		
		</table>
		
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
?>
