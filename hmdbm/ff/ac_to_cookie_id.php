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

$sql=sql_query_fblohar("select * from ac where status=1 and firefox between 700 and 899 order by firefox");
while($row=mysql_fetch_array($sql)){
	$rs=explode("@",$row['email']);
	//echo "{$row['firefox']}->{$row['email']}--$rs[0]<br>";
	//sql_query_hmdbm("update cookie_id set username='{$row['email']}',pass='$rs[0]',fbrc_id={$row['id']} where id={$row['firefox']}");
}

$sql=sql_query_fblohar("select * from ac where status=1 and firefox between 900 and 999 order by firefox");
while($row=mysql_fetch_array($sql)){
	$rs=explode("@",$row['email']);
	$st="xpart77".$rs[0][strlen($rs[0])-1];
	
	//echo "{$row['firefox']}->{$row['email']}--{$st}<br>";
	//sql_query_hmdbm("update cookie_id set username='{$row['email']}',pass='$st',fbrc_id={$row['id']} where id={$row['firefox']}");
}


?>