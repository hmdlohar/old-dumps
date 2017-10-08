<?php
include 'files/db.php';
include 'files/ver.php';
include "files/{$bernarx}";
?>
<link rel="stylesheet" type="text/css" href="files/style.css" />
<title>Home - Anisha Patel</title>
<?php
include 'head.php';
include 'sidemenu.php';
?>
<!-- Mid Cal Start -->

<div id="middlecol">
<h2>  
<?php
echo "{$bernar1}";
?>
</h2>
<h1>Latst Girls Photos </h1>
</li>
<?php
include 'pics/update.php';
?>
<div class="nextt">  <a href="pics">
<center><font size=4>See All Updates </font> </center> </a>
</div>
<h2>  
<?php
echo "{$bernar1}";
?>
</h2>	
<h1>Latst Girls Photos (18+) </h1>
<?php
include 'xxxpics/update.php';
?>
<div class="nextt">  <a href="xxxpics">
<center><font size=4>See All Updates </font> </center> </a>
</div>

<h2>  
<?php
echo "{$bernar1}";
?>
 </h2>	
</div>
<!-- Mid Cal end -->
<?php 
include 'rightcal.php';
?>
<?php
$hit_page = "index.php";
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
