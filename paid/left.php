<div id=left>
	<div id=left_header>Earn Money</div>
		<?php
		if ($view == "home"){
			$sql_left = "SELECT * FROM list where link != 'home'&& other=1 ORDER BY id  asc LIMIT 30";
			}else{
		$sql_left = "SELECT * FROM list where mm='earn'&& link != 'home'&& other=1 ORDER BY id  asc LIMIT 30";
	}
		mysql_select_db( $dbname );
		$retval = mysql_query( $sql_left, $conn );
		while($row = mysql_fetch_array($retval)){
		$name = $row['name'];
		$link = $row['link'];
		$hit = $row['hit'];
		$mm = $row['mm'];
		$main_containt = $row['other'];
		if ($mm == 'xxxpics'){
echo "<a href={$url}?list={$link}&view={$mm}>{$name} (18+)</a>";
			}
			else{
		echo "<a href={$url}?list={$link}&view={$mm}>{$name}</a>";
	}		}
		?>
		<a href=?list=comming_soon&view=earn>Comming Soon</a>
		<br>
		<div id=left_header class=left_header2>Tutorials</div>
		<a class=tutorial href="<?php echo $url; ?>/?list=tutorial/earn_money">Earn Money</a>
		<a class=tutorial href="<?php echo $url; ?>/paid?list=tutorial/get_recharge">Get Free Recharge</a>
		<a class=tutorial href="<?php echo $url; ?>/paid?list=tutorial/get_likes">Get Likes,Follow</a>
		</div>
</div>
<script>
function change_color1(){
	document.getElementsByClassName('left_header2')[0].style.background="white";
	document.getElementsByClassName('left_header2')[0].style.color="#4B491B";
	setTimeout("change_color2()",500);
	}
function change_color2(){
	document.getElementsByClassName('left_header2')[0].style.background="#4B491B";
	document.getElementsByClassName('left_header2')[0].style.color="white";
	setTimeout("change_color1()",500);	
	}
change_color2();	
</script>