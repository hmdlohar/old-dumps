<?php

mysql_set_charset('utf8');
function sql_query($query){
	mysql_set_charset('utf8');
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}


?>