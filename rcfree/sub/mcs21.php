<link rel=stylesheet href=../style.css type=text/css>
<?php include '../head.php'; ?>
<div id=body>
<p id=title_para>MCS-021 Data Structore And Algorithm</p>

<p id=para>
Here Are The Video Tutorials Of MCS-021. You Can Free Download this Videos directly from website Here we included Download link with list. You can order DVD by Clicking On Order Now Button Bellow.
</p>
<center>
<a href="../order.php" style="text-decoration:none">
<div id=order>
Order DVD Now
</div>
<h3>Price: Rs.100 + Rs.50(Develery Charge)</h3>
</a></center>

<div id=topic_list>
<p id=title_para>All Lectures</p>
<?php
include '../db.php';
$sql = "SELECT * FROM topics";
mysql_select_db($dbname);
$retval = mysql_query($sql, $conn);
while($row=mysql_fetch_array($retval)){
$name = $row['name'];
$link = $row['link'];

echo "<div id=topics>	<span class=t_name>{$name}<a class=t_buy href=../order.php>Buy DVD</a> </span> <a href='{$link}' class=t_download>Download</a></div>";
	}

?> 





</div>

<?php include '../foot.php'; ?>