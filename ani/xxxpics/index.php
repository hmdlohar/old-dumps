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
<title> Photos - Anisha Patel</title>
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
<h1>Latst Girls Photos </h1>
</li>
<?php
$sql = "SELECT * FROM xxxpics
	ORDER BY id DESC 
	LIMIT $limit , 10";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<a href={$url}/xxxpics/view.php?page={$row['link']}><div class='next'>
<table> <tr>
<td>  <img src={$xxxsite}/{$row['link']}/{$row['other']}1.jpg width=100 height=125>  </td>
<td>{$row['name']}</td>
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
<?php
$hit_page = "xxxpics";
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


