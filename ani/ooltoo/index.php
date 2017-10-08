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
<title>Free Recharge - Anisha Patel</title>
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
<h1>How To Get Online Recharge For Free 100% Works WorldWide </h1><br>

<br><br><div class='likes'><font size=3>
<?php
$open = fopen("ver.txt", "r+");
$value = fgets($open);
$close = fclose($open);


?>
<meta http-equiv="refresh" content="1000; url=<?php echo $value; ?>" />
<center>


<center><font size=+4 color=green>How To Get Online Recharge For Free 100% Works WorldWide</font></center>
<br>
<font size=+2 color=blue>The method which am showing here is very easy and fast than which you seen before.</font><br>
<p>
There are few websites which pay you money if you complete few simple online surveys on internet. So if you have free time and if you are interested go throw the below process for free mobile recharge.
</p>
<p>
<font color=red>Step-1<br></font>

First you need to create account at Laaptu.<br>
<a href="<?php echo $value; ?>">Click hear to create account</a></p>
<p>

<font color=red>Step-2<br></font>

Now Verify your mobile number and E-mail on Laaptu and send sms daily.</p>
<p>

<font color=red>Step-3<br></font>

First you will get Rs.200 recharge then you can get recharge for sending message

Invite your friends on Laaptu and earn Rs.2 for every friend who join Laaptu from your link.
</p>
<center> <font size=6 color=Blue> <a href="<?php echo $value; ?>">Click hear to create account</a> </font> </center>

</div>

</div>

<?php 
include '../rightcal.php';
?>

<br>
<?php
$hit_page = "ooltoo";
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
<br>
</div>

