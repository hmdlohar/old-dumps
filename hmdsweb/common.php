<?php
include 'files/db.php';
   header( 'Content-Type: text/html; charset=utf-8' ); 
function sql_query($query){
	include "files/db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}
function sql_query2($query){
	mysql_set_charset('utf8');
	include "files/db.php";
	mysql_select_db($dbname);
	mysql_query("SET CHARACTER SET utf8");
mysql_query("SET NAMES utf8");
	$retval=mysql_query("SET NAMES utf8");
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
function get_name_link($link){
	$retval=sql_query("select name from menu2 where link='$link'");
	$row=mysql_fetch_array($retval);
	return $row[0];
}
function get_cat($type){
	switch($type){
	case "pics": $text="Photos";
	break;
	case "xxxpics": $text="(18+)Photos";	
	break;	
	case "sex_story": $text="Sex Story";	
	break;	
	}
	return $text;
}
function type_name($type){
	include 'files/db.php';
	$sql = "SELECT * FROM list WHERE link='$type'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row['name'];
	}
}
function in_pics($name,$link,$total,$status,$url){
	include 'files/db.php';
	$sql="insert into pics (name,link,total,status,url) values ('$name','$link','$total','$status','$url')";
	$retval=sql_query($sql);
	return $retval;
}
function mm_list(){
$mm_list=array();
$sql="select * from mm";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$mm_list['name'][]=$row['name'];
	$mm_list['link'][]=$row['link'];
	}
	return $mm_list;
}
function max_index(){
	$sql="select ind from post order by ind desc limit 1";
	$retval=sql_query($sql);
	$row=mysql_fetch_array($retval);
	return $row['ind'];
}
function get_mm($mm){
	$retval= sql_query("select name from mm where link='$mm'");
	$row=mysql_fetch_array($retval);
	return $row[0];
}
?>