<?php
$dbhost = 'hmdlohar.uk.nf:3306';
$dbuser = 'hmdloha1_root';
$dbpass = 'hamid445';
$dbname = 'hmdloha1_hmdbm';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

?>
