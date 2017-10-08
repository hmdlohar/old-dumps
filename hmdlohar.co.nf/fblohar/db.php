<?php
$dbhost = 'fdb4.biz.nf';
$dbuser = '1261760_hmd';
$dbpass = 'hamid445';
$dbname = '1261760_hmd';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

?>
