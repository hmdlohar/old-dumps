<?php
include "../common.php";
$abcd="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo strlen($abcd);
for($x=2;$x<strlen($abcd);$x++){
	//echo $x.$abcd[$x];
	$name=$abcd[$x];
	$link="Bollywood_Movies_Songs_{$abcd[$x]}";
	$u_link="Bollywood_Movies_Songs_{$abcd[$x]}";
	$perent="Bollywood_Movies_Songs";
	//echo sql_query("insert into menu2 (name,link,u_link,cat,perent) values ('$name','$link','$u_link','menu','$perent')");
	/*$retval2=sql_query("select u_link,perent from menu2 where name like '{$abcd[$x]}%'");
	while($row=mysql_fetch_array($retval2)){
		$perent2=$row['perent'];
		$u_link2=$row['u_link'];
		$perent2="{$perent2}_{$abcd[$x]}";
		
		sql_query("update menu2 set perent='$perent2' where u_link='$u_link2'");
		}*/
	}

?>