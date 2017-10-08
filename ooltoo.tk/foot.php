
<div id=right>
	<div id=b160x600><?php echo $bernar3; ?></div>
</div>

<div id=foot>

<?php
$uri =  $_SERVER['REQUEST_URI'];
$uri=uri($uri);
$num_uri=check_uri($uri,'hit');
if($num_uri==0){
	insert_uri($uri,'hit');
	}else{
		hit_uri($uri,'hit');
		}
echo get_uri($uri,'hit');

if(isset($_SERVER['HTTP_REFERER'])){
	$ref=$_SERVER['HTTP_REFERER'];
$ref=uri($ref);
$num_uri=check_uri($ref,'ref');
if($num_uri==0){
	insert_uri($ref,'ref');
	}else{
		hit_uri($ref,'ref');
		}
}

?>  
  
</div>