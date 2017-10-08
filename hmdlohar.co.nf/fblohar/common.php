<?php

function sql_query($query){
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}

function num_rows($table,$field,$value){
	$retval=sql_query("select $field from $table where $field='$value'");
	
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}

?>