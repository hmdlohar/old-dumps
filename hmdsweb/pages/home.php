<?php
$sql="select * from post where status=1 order by ind desc";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$other=$row['other'];
	$type=$row['type'];
	$id=$row['id'];
	if($type=="post"){$link2="?page=story&story_id={$id}";}
	if($type=="page"){$link2="?post={$link}";}
	echo "<div id=center_list><div id=post_title><a href='{$link2}'>{$name}</a></div>
		<div id=post_content>{$other}</div>	</div>";
			}

?>


	
