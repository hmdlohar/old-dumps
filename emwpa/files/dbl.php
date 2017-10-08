<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = '1261760_hmd';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

?>
