<?php
if(isset($_GET['alfa'])){
	$cats=get_perent_name($_GET['alfa']);
}else
if(isset($_GET['menu'])){
	$cats=get_perent_name($_GET['menu']);
}
else{
	$cats="Music";
}
?>

<div class=section>
	<div class=section_heading>
		<div class=sh_text><?php echo $cats; ?>:</div>
	</div>
	<div class=section_containt>
	<?php
	if($page_title=="music"){
		$alfa_sort="order by name";
		}else{$alfa_sort="order by date desc";}
	$next_back=0;
	if(isset($_GET['start'])){
		$start=$_GET['start'];
		}else{$start=0;}
	if(isset($_GET['alfa'])){
		$alfa=$_GET['alfa'];
	$retval=sql_query("SELECT * FROM menu where perent='$alfa' {$alfa_sort} limit $start,15");
if(num_rows("menu","perent",$alfa)>15){
		$next_back=num_rows("menu","perent",$alfa);
		}
	while($row = mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$perent=$row['perent'];
		$cat=$row['cat'];
		$img=$row['img'];		
		$u_link=$row['u_link'];
		$id=$row['id'];
		if($cat=='obj'){
		echo "<a class=categories_a href='?page={$page_title}&obj={$link}'><div id=center_list><img src='../img/{$img}.png' class=catagories_image> </td><td><div class=categories>{$name}</div></div></a>";
		}else{
			echo "<a class=categories_a href='?page={$page_title}s&menu={$link}'><div id=center_list><img src='../img/{$img}.png' class=catagories_image> </td><td><div class=categories>{$name}</div></div></a>";
			}
}
}else if(isset($_GET['menu'])){
		$menu=$_GET['menu'];
	if(num_rows("menu","perent",$menu)>15){
		$next_back=num_rows("menu","perent",$menu);
		}	
	$retval=sql_query("SELECT * FROM menu where perent='$menu' LIMIT $start,15");
	
	while($row = mysql_fetch_array($retval)){
		$name=$row['name'];
		$link=$row['link'];
		$perent=$row['perent'];
		$cat=$row['cat'];
$img=$row['img'];		$u_link=$row['u_link'];
		$id=$row['id'];
		
		if($cat=='obj'){
		echo "<a class=categories_a href='?page={$page_title}&obj={$link}'><div id=center_list><img src='../img/{$img}.png' class=catagories_image> </td><td><div class=categories>{$name}</div></div></a>";
		}else{
			echo "<a class=categories_a href='?page={$page_title}s&menu={$link}'><div id=center_list><img src='../img/{$img}.png' class=catagories_image> </td><td><div class=categories>{$name}</div></div></a>";
			}


}
}
else{
	$retval=sql_query("SELECT * FROM menu where perent='{$page_title}' order by name limit $start,15");
if(num_rows("menu","perent","{$page_title}")>15){
		$next_back=num_rows("menu","perent","{$page_title}");
		}
	while($row = mysql_fetch_array($retval)){
		if(mysql_num_rows($retval)>15){
		$next_back=mysql_num_rows($retval);
		}
		$name=$row['name'];
		$link=$row['link'];
		$perent=$row['perent'];
		$cat=$row['cat'];
$img=$row['img'];		$u_link=$row['u_link'];
		$id=$row['id'];
		echo "<a class=categories_a href='?page={$page_title}s&alfa={$link}'><div id=center_list><img src='../img/{$img}.png' class=catagories_image> </td><td><div class=categories>{$name}</div></div></a>";
	}
}
if($next_back!=0){
	if($start>=15){$backd="inline-block";}else{$backd="none";}
	$bk=$start-15;
	$back=get_get($_GET,"start={$bk}");
echo "<div id=next_back> <a href='{$back}' style='display:{$backd};margin-right:20px;'>Back</a>";
$cn=floor($next_back / 15);

if($start!=0){
	$pga=$start/15;
	}else{$pga=0;}
for($x=0;$x<=$cn;$x++){
	$clr="black";
	if($x==$pga){$clr="white";}
	$st=15*$x;
	$pg=get_get($_GET,"start={$st}");
	$x2=$x+1;
	echo "<a href='{$pg}' style='color:{$clr}'>{$x2}</a> ";
	}
	$nxt=$start+15;
	$next=get_get($_GET,"start={$nxt}");
	if($start<=$next_back-15){$nextd="inline-block";}else{$nextd="none";}
echo "<a href='{$next}' style='float:right;display:{$nextd};'>Next</a></div>";
}
	?>

<?php

?>
	</div>
	</div>