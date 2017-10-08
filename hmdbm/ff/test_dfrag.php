<?php 
function sql_query_fblohar($query){
	$dbhost = 'hmdlohar.uk.nf:3306';
$dbuser = 'hmdloha1_root';
$dbpass = 'hamid445';
$dbname = 'hmdloha1_fblohar';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}

function sql_query_hmdbm($query){
	$dbhost = 'hmdlohar.uk.nf:3306';
$dbuser = 'hmdloha1_root';
$dbpass = 'hamid445';
$dbname = 'hmdloha1_hmdbm';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}

//sql_query_fblohar("select * from ac");
$sql2=sql_query_hmdbm("select * from cookie_id where id between 1000 and 1100");
$rows = array();


$sql=sql_query_fblohar("select * from ac where status=1 and firefox between 700 and 899 order by firefox");

while($row=mysql_fetch_array($sql)){
	$rs=explode("@",$row['email']);
	echo "{$row['firefox']}->{$row['email']}--$rs[0]<br>";
	sql_query_hmdbm("update cookie_id set username='{$row['email']}',pass='$rs[0]',fbrc_id={$row['id']} where id={$row['firefox']}");
	
}


?>