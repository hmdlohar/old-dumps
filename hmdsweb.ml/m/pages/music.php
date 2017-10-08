<?php
if(isset($_GET['obj'])){
	$obj=$_GET['obj'];
	$retval=sql_query("select * from menu where link='$obj'");
	while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$size=$row['size'];
		$u_link=$row['u_link'];
		echo "<div class=section>
	<div class=section_heading>
		<div class=sh_text>Download File:</div>
	</div>
	<div class=section_containt>
		<table style='color:white;'>
		<tr><td>File Name:</td><td>{$name}</td></tr>
		<tr><td>File Size:</td><td>{$size}</td></tr>
		<tr><td>File Category:</td><td>Bollywood Music</td></tr>
		<tr><td>Download:</td><td><a href='http://www.mymp3song.com/files/download/id/{$u_link}'>{$name}</a></td></tr>
		</table>
			</div>
</div>
		";
		}
}

?>
