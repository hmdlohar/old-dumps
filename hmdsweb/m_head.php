
<?php
include 'common.php';
$page=is_set('page','home','GET');
$perent=is_set('perent','index','GET');

?>
<link rel="stylesheet" href="files/m_style.css" type="text/css" />
<html>
	<title>Hmd's Web</title>
<body>
<div class=head>
	<a href="<?php echo $url."m.php"; ?>">
<div class=title>
<img class=icon src=img/icon.png>
<link rel="shortcut icon" href="img/icon_small.png">
<div class=head_title>Hmd's<span class=head_title2 style="color:#C8C8C8">Web</span></div>
</div>
</a>
</div>
<div class=b300x50></div>
<?php if($perent=="index"){
	
	?>
<div class=section>
	<div class=section_heading>
		<div class=sh_text>Leatest Updates:</div>
	</div>
	<div class=section_containt>
		<?php
		$retval=sql_query("select * from obj where status=1");
		while($row=mysql_fetch_array($retval)){
			$name=$row['name'];
			$link=$row['link'];
			$id=$row['id'];
			echo "
			<div class=sc_list>
			<span class=sc_catagory>{$mm} :</span><a href=''>{$name}</a>
			</div>";
			}
		
		?>
		<a href="">[More Updates]</a>
	</div>
</div>
<?php
}
?>
<div class=b300x50></div>
<?php if($page!="obj"){
	
?>
<div class=section>
	<div class=section_heading>
		<div class=sh_text><?php echo get_name_link($perent); ?>:</div>
	</div>
	<div class=section_containt>
		<?php
		$retval=sql_query("select * from menu2 where perent='{$perent}' order by name");
		while($row=mysql_fetch_array($retval)){
			$name=$row['name'];
			$link=$row['link'];
			$id=$row['id'];
			$perent=$row['perent'];
			$cat=$row['cat'];
			if($cat=="menu"){
				echo "<a href='?perent={$link}' class=categories_a><div class=categories>{$name}</div></a>";
				}
			else{
				echo "<a href='?perent={$link}&page=obj' class=categories_a><div class=categories>{$name}</div></a>";
				}
			}
		?>
		

	</div>
</div>
<?php
}
?>
<?php if($page=="obj"){
	
?>
<div class=section>
	<div class=section_heading>
		<div class=sh_text>Download:</div>
	</div>
	<div class=section_containt>
		<?php
		$retval=sql_query("select * from menu where link='{$perent}'");
		while($row=mysql_fetch_array($retval)){
			$name=$row['name'];
			$link=$row['link'];
			$id=$row['id'];
			$perent=$row['perent'];
			$cat=$row['cat'];
			if($cat=="menu"){
				echo "<a href='?perent={$link}' class=categories_a><div class=categories>{$name}</div></a>";
				}
			else{
				echo "<a href='?perent={$link}&page=obj' class=categories_a><div class=categories>{$name}</div></a>";
				}
			}
		?>
		

	</div>
</div>
<?php
}
?>
<div class=b300x50></div>
<div class=foot>
	<a href=""><span class=foot_links>About Us  </span></a>
	<a><span class=foot_links>|</span></a>
	<a href=""><span class=foot_links>Contact Us</span></a>
</div>


</body>
</html>