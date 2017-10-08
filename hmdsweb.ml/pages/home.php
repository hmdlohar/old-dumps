<div class=section>
	<div class=section_heading>
		<div class=sh_text>Latest Updates:</div>
	</div>
	<div class=section_containt>
		<?php
		$retval=sql_query("select * from updats order by sort desc limit 10");
		while($row=mysql_fetch_array($retval)){
			$name=$row['name'];
			$link=$row['link'];
			$perent=get_perent_name($row['perent']);
			$home_perent=get_perent($row['perent']);
			$id=$row['id'];
			echo "
			<div class=sc_list>
			<span class=sc_catagory>{$perent} --></span><a href='?page={$home_perent}&obj={$link}'>{$name}</a>
			</div>";
			}
		
		?>
		<a href="">[More Updates]</a>
	</div>
</div>