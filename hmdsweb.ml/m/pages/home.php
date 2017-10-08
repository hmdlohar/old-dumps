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
<div class=b300x50><?php echo $bernar_mobile; ?></div>
<div class=section>
	<div class=section_heading>
		<div class=sh_text>Categories:</div>
	</div>
	<div class=section_containt>
		<?php
		$retval=sql_query("select * from menu where perent='home' limit 0");
		while($row=mysql_fetch_array($retval)){
			$name=$row['name'];
			$link=$row['link'];
			$id=$row['id'];
			$perent=$row['perent'];
			$cat=$row['cat'];
			if($cat=="menu"){
				echo "<a href='?page={$link}' class=categories_a><div class=categories>{$name}</div></a>";
				}
			else{
				echo "<a href='?page={$link}&page=obj' class=categories_a><div class=categories>{$name}</div></a>";
				}
			}
		?>
		
		<a href="?page=musics" class="categories_a"><div class="categories">Music</div></a>
		<a href="?page=videos" class="categories_a">	<div class="categories">Videos</div></a>
		<a href="?page=full_movies" class="categories_a"><div class="categories">Full Movies</div></a>		

	

	</div>
</div>