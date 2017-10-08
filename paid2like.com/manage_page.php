<?php
include 'checklogin.php';
include 'profile.php';
include 'head.php';


?>

	<div id=contain>
		<h2>
		Your Pages:-
		</h2>
		<hr color=green size=3px>
		<p>
		<table border=0>
		<tr><th width=50px align=center>No.</th><th width=80px align=center>Page Name</th><th width=80px align=center>Page ID</th><th  align=center width=80px>Credits Par Page</th><th align=center width=50px>States</th><th align=center width=50px>Likes</th><th align=center width=60px>Credits</th><th align=center width=170px>Action</th> </tr>
		<tr></tr>
		<?php
		
		$no_page = '1';
		$sql = "SELECT * FROM page WHERE userid='$uname'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql, $conn);
		$no_page_num = mysql_num_rows($retval);
		while(($row = mysql_fetch_array($retval, MYSQL_ASSOC)) && ($no_page <= $no_page_num)){
			$row_link = $row['link'];
			if ($row['states'] == 1){
				$actiondo = "Pause";
				$actionsend = "pause";
				$statesshow = "Active";
				}
			if ($row['states'] == 0){
				$actiondo = "Resume";
				$statesshow = "Paused";
				$actionsend = "resume";
				}
			$sql_441 = "SELECT * FROM log WHERE action='like' && link='$row_link'";
			mysql_select_db($dbname);
			$retval_441 = mysql_query($sql_441, $conn);
			$link_num = mysql_num_rows($retval_441);
			echo "<tr><td align=center>{$no_page}</td><td align=center>{$row['name']}</td><td align=center>{$row['link']}</td><td  align=center>{$row['points']}</td><td align=center>{$statesshow}</td><td align=center>{$link_num}</td><td align=center>{$row['credits']}</td><td align=center><a href='admin/action_page.php?action={$actionsend}&pid={$row['link']}' id=pause>{$actiondo}</a> <a href='admin/action_page.php?action=delete&pid={$row['link']}' id=pause> <img src='img/close.png' height=20 width=20></a> <a href='admin/add_credits.php?pid={$row['link']}'> <img src='img/add.png' height=20 width=20 alt='Add Credits'></a></td> </tr>
		<tr></tr>";
		$no_page++;
			}
		?>
		
		
		</table>
		</p>
		<hr color=green size=3px>
		<h2>
		Add New Page:-
		</h2>
		<p id=lectorp>
		YOU CAN USE YOUR CREDITS FOR YOUR PAGE PROMOTION. YOU CAN ADD YOUR PAGE AND GET LIKES ON YOUR PAGE. YOUR PAGE WILL BE DISPLAYED ON WORK PAGE WHERE OTHER USERS WILL LIKE YOUR PAGE. YOU CAN ASSIGN CREDITS FOR YOUR PAGE WHEN YOUR CREDITS WILL BE USED YOUR PAGE WILL STOP GETTING LIKES. PLEASE NOTE THAT HOW MACH MORE CREDITS PAR PAGE YOU WILL ASSIGN YOU WILL GET LIKES AS FAST. HIGH CREDITS PAGE WILL SHOW FIRST.<br>
		
		<h4>Insect Page ID/Username to get likes on your page:<br> </h4><br><h3><font color=red>
		<?php
			if (isset($_GET['error'])){
				
			$error = $_GET['error'];
			
			if ($error == 442){
			echo "this is not valud page id";
			}
			if ($error == 441){
				echo "You Can Not Assign Credits which is more then your Credits.";
			}
			if ($error == 443){
				echo "Page Already Added.";
			}
		}
			?> </font>
		</h3>
		<form action="admin/add_page.php" method=POST>
		<table>
		<tr><td>Page Name:-</td><td><input type=text id=pname name=pname size=40></td></tr>
		<tr><td>Page Link/ID:-</td><td><input type=text id=pid name=pid size=40></td></tr>
		<tr><td>Credits Par Page:-</td><td><select id=points name=points> 
		
				<?php
				for ($no=10;$no>5;$no--){
					echo "<option value={$no}>{$no}     </option>";
					}
				?>			
		</select></td></tr>
		<tr><td>Assign Credits:-</td><td><input type=hidden name=userid value="<?php echo $uname; ?>"><input type=text name=credits id=creditspp value="<?php echo $credits; ?>"></td></tr>
		<tr><td></td><td><input type=submit id=submit_page value=submit><p id=loading></p></td></tr>
		<tr><td></td><td><p id=error>
			
			
		</p></td></tr>
		</table>	</form>	
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
$page = "manage_page.php";
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
