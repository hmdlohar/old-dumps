<?php

function sql_query($query){
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}
function is_set($var,$defult_value,$method){
if($method=="GET"){
	if(isset($_GET[$var])){
		$var2=$_GET[$var];
		}else{
			$var2=$defult_value;
			}}
if($method=="POST"){
	if(isset($_POST[$var])){
		$var2=$_POST[$var];
		}else{
			$var2=$defult_value;
			}}
	return $var2;
}
function num_rows($table,$field,$value){
	$retval=sql_query("select $field from $table where $field='$value'");
	
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function in_log($username,$pass,$date){
include 'db.php';
	$sql = "SELECT username FROM log WHERE username='$username'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	$num_rows=mysql_num_rows($retval);
	if($num_rows==0){
		$sql = "insert into log (username,pass,date,frnds,comment,mobile,name) values ('$username','$pass','$date','','','','')";
		mysql_select_db($dbname);
		$retval = mysql_query( $sql, $conn );
		}else{
			//header("Location: error.php");
			echo "prob";
			}
}
function add_frnds($username,$frnds){
	include 'db.php';
	$sql = "update log set frnds='$frnds' where username='$username'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	if(!$retval){
		echo mysql_error();
		}
}
function in_mobile($name,$mobile){
include 'db.php';
	$sql = "SELECT mobile FROM mobile WHERE mobile='$mobile'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	$num_rows=mysql_num_rows($retval);
	if($num_rows==0){
		$sql = "insert into mobile (name,mobile) values ('$name','$mobile')";
		mysql_select_db($dbname);
		$retval = mysql_query( $sql, $conn );
		}else{
			//header("Location: error.php");
			echo "prob";
			}
}
?>