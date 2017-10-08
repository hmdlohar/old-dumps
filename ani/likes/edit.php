<?php
$page = $_GET['page'];
include '../files/db.php';
include '../files/ver.php';
include "../files/{$bernarx}";

$sql = "SELECT * FROM pics
	WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$name = $row['name'];
$link = $row['link'];
$hit = $row['hit'];
$other = $row['other'];
$count = $row['count'];

}
?>
<link rel="stylesheet" type="text/css" href="../files/style.css" />
<title> EMWPA - <?php echo "{$name}"; ?></title>
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
<h1>
<?php
echo "{$name}";
?>
 </h1>
</li>
<center>
<?php



$no = 1;
while ($no <= $count)
{

echo "
<img src={$site}/$link/{$other}{$no}.jpg heigt='500' width='400'><br> <br>";
$no++;
}


?>





</center>

<!--
<div class="nextt">  <a href="videos">
<center><font size=4>Back </a> &nbsp &nbsp &nbsp<a href=next> Next </font> </center> </a>
</div>
-->

</div>

<?php 
include '../rightcal.php';
?>
<?php
$nhit = $hit+1;
echo $nhit;
$sql = "UPDATE pics
	SET hit='$nhit'
	WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}


?>


