<?php
require_once 'md/Mobile_Detect.php';
include "common.php";
$detect = new Mobile_Detect;
if($detect->isMobile()){
	//echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."?".get_get2();
$get_get=get_get2();
$get_go= "m?{$get_get}";
header("Location: ".$get_go);
}
?>
<title>Oltoo</title>
<meta charset="UTF-8">
<meta name="description" content="Free Bollywood Music,Videos,Full movies">
<meta name="keywords" content="Free Bollywood Music,Videos,Full movies">
<meta name="author" content="Hmd's web">
<script src=common.js></script>

<?php
$c_url= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include 'files/db.php';
include 'files/ver.php';
include "files/{$bernar}";
if(isset($_GET['page'])){$page=$_GET['page'];
if(isset($_GET['pics'])){$pics=$_GET['pics'];}else{$pics=1;}
}else{$page="home";}

?>
<link rel="stylesheet" type="text/css" href="files/style.css" />
<div id=full_body onmouseover=//body_click()>
	<a id=a001 target=new href="http://anisha778.ml"></a>
<div id=head>
	<div id=head_title style="color:#1EAE4E">OO<span class=head_title2 style="color:#08e8a9">LT</span><span class=head_title2 style="color:#58A8E9">OO</span></div>
	<div id=b460x60><?php echo $bernar1; ?></div>
	<div id=head_menu>
		<li><a href="?page=home">Home</a></li>
		<!--<li><a href="?page=picss">Photos</a></li>
		<li><a href="?page=xxxpicss">(18+)Photos</a></li>
		<li><a href="?page=sex_storys">Sex Story</a></li>
		<li><a href="?page=audio_sexs">Audio Sex</a></li>
		-->
		<li><a href="?page=musics">Music</a></li>
		<li><a href="?page=videos">Videos</a></li>
		<li><a href="?page=full_movies">Full Movies</a></li>
	</div>
	<p id=result style="position:fixed;right:25px;top:20px;display:none;">result</p>
	<br><br>
	<div style="float:left;margin:0px;" id=b760x90><?php echo $bernar2; ?></div></div>
</div>
<a id=redir href=""></a>


<script>
//setTimeout("redir(http://affiliate.flipkart.com/install-app?affid=hmdloharg');",10000);
function redir(url){
	hmd=document.getElementById('redir');
	hmd.href=url;
	hmd.click();
}
function fade(element) {
    var op = 1; 
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}
hmd=document.getElementById('sex_story');
function roll_up(element) {
	time=1000;
	pos=-250;
	window.inter1=setInterval(function(){element.style.bottom=pos;pos=pos+10;if(pos>=10){clearInterval(window.inter1)}},30);
}
//setTimeout("roll_up(hmd)",5000);
function next_page(point){
	if(document.location.href.indexOf("start")>=1){
		document.location.assign(document.location.href.split("&start")[0]+"&start="+point);
		}else{
	document.location.assign(document.location.href+"&start="+point);}
}
//pid1=document.getElementById("001");
//blink(pid1,"000000","FFFFFF");
</script>
