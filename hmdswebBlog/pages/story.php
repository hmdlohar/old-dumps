<?php

if(isset($_GET['story_id'])){
	$story_id=$_GET['story_id'];
	$sql="select * from post where id=$story_id";
	$retval=sql_query($sql);
	while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$other2=$row['other2'];
	$type=$row['type'];
	$id=$row['id'];
	echo "<div id=center_list>
	<div id=post_title>{$name}.
</div>
	<div id=post_content>
	{$other2}
	</div></div>";
		
	}
}

?>