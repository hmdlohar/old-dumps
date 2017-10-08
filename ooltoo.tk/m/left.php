<div id=left>
	<div id=left_title>
		<span id=left_title_text>Latest Updates</span>
	</div>
	<?php
	
$retval=sql_query("SELECT * FROM menu where cat='menu'&&degree=1 order by date DESC LIMIT 15");
	while($row = mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$perent=$row['perent'];
		$cat=$row['cat'];
		$u_link=$row['u_link'];
		$id=$row['id'];
		$img=$row['img'];
	echo "	<a href='?page={$img}s&menu={$link}'><div id=left_updates>
	<div id=left_post_title>{$name}</div>
	</div></a>";
}
	?>

</div>