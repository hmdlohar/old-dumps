<?php
include "../common.php";
$retval=sql_query("select link,id from menu order by id desc limit 1");
while($row=mysql_fetch_array($retval)){
	//$pic=home_perent($row['link']);
	$id=$row['id'];
	//echo sql_query("update menu set img='{$pic}' where id={$id}");
}

echo sql_query("update menu set img='video' where img='videos'");

?> 