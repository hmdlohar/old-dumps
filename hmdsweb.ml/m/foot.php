

<div class=b300x50><?php echo $bernar_mobile; ?></div>
<div class=foot>
	<a href=""><span class=foot_links>About Us  </span></a>
	<a><span class=foot_links>|</span></a>
	<a href=""><span class=foot_links>Contact Us</span></a>
</div>


</body>
</html>
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