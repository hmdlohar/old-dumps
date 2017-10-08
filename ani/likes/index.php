<?php
include '../files/db.php';
include '../files/ver.php';
include "../files/{$bernarx}";


if (isset($_GET['pic'])) {
$limit = $_GET['pic'];
}
else	{
$limit = '0';

}
$limit2 = $limit+10;
$limit1 = $limit-10;

?>
<link rel="stylesheet" type="text/css" href="../files/style.css" />
<title>FB Likes - Anisha Patel</title>

<?php
include '../head.php';
include '../sidemenu.php';
?>
<div id="middlecol">
		<h2> 
<?php
echo "{$bernar1}";

?>
  </h2>
<h1>Buy Cheapest Facebook Likes. </h1><br>
<center>  <img src=../img/fblikes1.png width=300> </center>
<br><br><div class='likes'><font size=3>
Hello, <br>
&nbsp &nbsp &nbsp &nbsp &nbsp 
Hear we are providing you REAL Facebook Likes at cheapest Price. We are doing likes by Social Exchange Sites, By inviting facebook Friends, By promoting your page in groups and many more. Hear we can get High Qualiey likes and also Low Qualiey likes. Out High Qualiey likes are done by inviting facebook friends which is best likes for promiting business. We do Low Qualiey likes by Social Exchange. Any Likes you need You can choose From bellow.
</font></div><br><br>
<?php
$sql = "SELECT * FROM likes
	 
	LIMIT $limit , 10";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<a href={$url}/likes/view.php?page={$row['link']}><div class='likes'>
<table> <tr>
<td>  <img src=../img/likesi.png width=100 height=125>  </td>
<td>{$row['name']} ({$row['other']})</td>
</tr></table></div></a>";
}
?>

<div class="nextt">  
<center> 
<?php
if ($limit >= 10) {
echo "<a href=?pic={$limit1}> Back</a>";
}

?>
&nbsp &nbsp
<a href="?pic=<?php echo $limit2; ?>"> <font size=4>Next </font> </center> </a>
</div>

</div>

<?php 
include '../rightcal.php';
?>

<br>
<?php
$hit_page = "likes";
$sql_get = "SELECT * FROM hits WHERE link='$hit_page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql_get, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
	$hit = $row['hit'];
	$name = $row['name'];
	$link = $row['link'];
}
$set_hit = $hit+1;
$sql_update = "UPDATE hits SET hit='$set_hit' WHERE link='$hit_page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql_update, $conn );
?>


