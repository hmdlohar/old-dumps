<?php 
include "common.php";
if(isset($_GET['noteId'])){
	$noteId=$_GET['noteId'];
	$retval=sql_query("select notes from ac where id={$noteId}");
	$row=mysql_fetch_array($retval);
	echo $row[0];
}
if(isset($_GET['noteIdEdit'])){
	$retval=sql_query("select status from ac where id=13");
	$row=mysql_fetch_array($retval);
	$noteId1=$row[0];
	$noteId=$_GET['id'];
	$noteValue=$_GET['noteIdEdit'];
	sql_query("update ac set notes='{$noteValue}' where firefox='{$noteId}'");
}
if(isset($_GET['editFriends'])){
	$frnds=$_GET['editFriends'];
	$id=$_GET['id'];
	sql_query("update ac set other2='{$frnds}' where firefox={$id}");
}
if(isset($_GET['importDate'])){
	$frnds=$_GET['importDate'];
	$id=$_GET['id'];
	sql_query("update ac set other1='{$frnds}' where firefox={$id}");
}
if(isset($_GET['getRunningNow'])){
	$retval=sql_query("select status from ac where id=13");
	$row=mysql_fetch_array($retval);
	echo $row[0];
}
if(isset($_GET['setRunningNow'])){
	$runningNow=$_GET['setRunningNow'];
	sql_query("update ac set status='{$runningNow}' where id=13");
}
if(isset($_GET['getMsg'])){
	$getMsg=$_GET['getMsg'];
	$retval=sql_query("select email from ac where id=13");
	$row=mysql_fetch_array($retval);
	echo $row[0];
}
if(isset($_GET['setMsg'])){
	$getMsg=$_GET['setMsg'];
	sql_query("update ac set email='{$getMsg}' where id=13");
}

?>