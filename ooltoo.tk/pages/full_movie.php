<?php
if(isset($_GET['obj'])){
	$obj=$_GET['obj'];
	$retval=sql_query("select * from obj where link='$obj'");
	while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$html=$row['html'];
		$u_link=$row['u_link'];
		$multi_link=$row['multi_link'];
		echo "<div class=section>
	<div class=section_heading>
		<div class=sh_text>Download File:</div>
	</div>
	<div class=section_containt>
		<table style='color:white'>
		<tr><td>File Name</td><td>:{$name}</td></tr>
		<tr><td>File Category</td><td>:Full Movies</td></tr>
		<tr><td>Download Links:-</td></tr>
		</table>
		<table>
		";
$multi_link=json_decode($multi_link,true);
for($x=0;$x<sizeof($multi_link);$x++){
	echo "<tr><td><a href='?page=redirect&redirect={$multi_link[$x]['link']}'>{$multi_link[$x]['name']}</a></td></tr>";
	}
	
		echo "
		</table>
		</td></tr>
			
		
		</table>
		</div>
		</div>
		";
		}
}

?>
