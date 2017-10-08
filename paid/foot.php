<div id=right>
	<p id=b160x600 style='margin-left:30px'><?php echo $bernar3; ?></p>
</div>

<div id=bottom>
<?php
$uri =  $_SERVER['REQUEST_URI'];
$uri=uri($uri);
$num_uri=check_uri($uri);
if($num_uri==0){
	insert_uri($uri);
	}else{
		hit_uri($uri);
		}
echo get_uri($uri);
?>
</div>