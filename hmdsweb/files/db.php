<?php
$url="http://localhost/hmdsweb/";
//include "bid_hmdsweb.php";
include "bernarx.php";

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'hmdsweb';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

?>
