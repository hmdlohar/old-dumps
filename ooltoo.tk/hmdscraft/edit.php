<?php 
include "common.php";
if(isset($_GET['add_hits'])){
	$cur=$_GET['add_hits'];
	$retval=sql_query("select id from hits where uri='{$cur}'");
	if(mysql_num_rows($retval)>=1){
		$retval=sql_query("select hits from hits where uri='{$cur}'");
		$row=mysql_fetch_array($retval);
		$hits=$row[0]+1;
		echo $hits;
		sql_query("update hits set hits='{$hits}' where uri='{$cur}'");
	}
	else{
		sql_query("insert into hits (uri,hits) values ('{$cur}','1')");
	}
}

?>