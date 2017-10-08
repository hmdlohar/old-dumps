<?php
include "common.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

$retval=sql_query("select * from bbm where other='bbm' order by grp");
$arr=array(
);
$ac=0;
while($row=mysql_fetch_array($retval)){
	$title=str_replace('"','\"',$row['title']);
	$grp=$row['grp'];
	$ind=$row['ind'];
	$bid=$row['bid'];
	$url=$row['url'];
//	$str="{title:'{$title}',group:'{$grp}',index: '{$ind}',id: '{$bid}',url: '{$url}'},";

$arr[$ac]['title']=$title;
$arr[$ac]['group']=$grp;
$arr[$ac]['index']=$ind;
$arr[$ac]['id']=$bid;
$arr[$ac]['url']=$url;
$arr[$ac]['other2']=$row['other2'];
$ac++;

}

print_r(json_encode($arr));
?>
