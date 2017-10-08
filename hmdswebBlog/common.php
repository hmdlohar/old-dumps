<?php
include 'files/db.php';

function sql_query($query){
	include "files/db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
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
?>