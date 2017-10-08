<?php
include "common.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$retval=sql_query("select distinct grp from bbm");
while($row=mysql_fetch_array($retval)){
	if(num_rows("bbm","title",$row['grp'])==0){
		sql_query("insert into bbm (title,other,grp) values ('{$row['grp']}','grp','TOOLBAR')");
		}else{}
	}
$arr=array();
$ac=0;
$retval=sql_query("select * from bbm where other='grp' order by title");
while($row=mysql_fetch_array($retval)){
	$arr[$ac]['id']=$row['id'];
	$arr[$ac]['group']=$row['title'];
	sql_query("update bbm set other2='{$ac}' where grp='{$row['title']}'");
	$ac++;
	}
print_r(json_encode($arr));
?>
