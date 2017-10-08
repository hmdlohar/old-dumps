<?php include 'head.php'; ?>
<div id=body>
<p id=title_para>GET FREE RECHARGE FOR LIKING FACEBOOK PAGE/PHOTO/POST</p>
<iframe src="http://yllix.com/banner_show.php?section=General&amp;pub=664587&amp;format=728x90&amp;ga=a" frameborder="0" scrolling="no" width="728" height="90" marginwidth="0" marginheight="0"></iframe>
<p id=para>
	HELLO, <BR> <SPAN ID=RED>FB4LIKE.TK</SPAN> IS WEBSITE WHERE YOU CAN GET FREE RECHARGE FOR LIKING FACEBOOK PAGES,PHOTOS OR POST. YOU JUST NEED TO LIKE 3-5 PHOTOS AND WE WILL RECHARGE YOUR MOBILE WITH <SPAN ID=RED2>RS.50 TO RS.300</SPAN>.<br><BR>
	BELLOW IS LIST OF PAGES/PHOTO/POST. FIRST YOU NEED TO CLICK ON <SPAN ID=RED3>LIKE</SPAN> BUTTON AND THEN THE FACEBOOK PAGE/PHOTO/POST WILL OPEN IN OTHER WINDOW. YOU JUSE NEED TO LIKE THAT PAGE AND CLOSE THAT WINDOW AND THEN CLICK ON THE <SPAN ID=RED3>CONFIRM</SPAN> BUTTON AND WAIT FOR 2-3 SECOND AND YOUR TASK WILL BE COMPLETED.
	<BR><BR>
	<SPAN ID=RED>NOTE: YOU MUST NEED TO LIKE ALL PAGES TO GET FREE RECHARGE.</SPAN>
</p>
<p id=title_para>LIKE THE PAGES BELLOW</p>

<div CLASS=fblist>

<?php
$page=array("777376885624742","ritengorbjps","dainikbhaskar");
$page_type=array("page","page","page");
for($i=0;$i<3;$i++){
	echo "<div CLASS=list_itm>
<span CLASS=page_name><img src=fb.png height=15 width=15> FACEBOOK PAGE-1</span><span id=like{$i} CLASS=like_btn onclick=getlikes({$i},'{$page{$i}}','{$page_type{$i}}')>LIKE</span><span id=confirm{$i} CLASS=confirm_btn onclick=getconfirm({$i},'{$page{$i}}','{$page_type{$i}}')>CONFIRM</span><img id=loading{$i} src=img/fb.gif height=30 style='display:none;margin-left:350px;'>
</div>";
	}


?>
</div>
</div>

<iframe src="http://yllix.com/banner_show.php?section=General&amp;pub=664587&amp;format=728x90&amp;ga=a" frameborder="0" scrolling="no" width="728" height="90" marginwidth="0" marginheight="0"></iframe>
<a id=topa href="" target=new></a>
<script type="text/javascript">
	var topa=document.getElementById('topa');
window.blink=1;
window.type="like";
function blinkColor(id,type)
{
  document.getElementsByClassName(window.type+"_btn")[id].style.background="#034992";
  if(window.blink==1){
  setTimeout("setblinkColor("+id+")",500);}
}

function setblinkColor(id,type)
{
  document.getElementsByClassName(window.type+"_btn")[id].style.background="#F9F9FF";
    if(window.blink==1){
  setTimeout("blinkColor("+id+")",500);}
}
blinkColor(0);
var url="http://graph.facebook.com/ritengorbjps";


function getlikes(span,link_id,type){
	window.type="confirm";
	document.getElementById('like'+span).style.display="none";
	document.getElementById('confirm'+span).style.display="inline-block";
clicked_like();
if(type="page"){
	topa.href="https://mbasic.facebook.com/"+link_id;
	topa.click();
	curl("http://graph.facebook.csom/"+link_id);
	setTimeout(function (){window.likes1=window.curl;var obj = JSON.parse(window.likes1); window.likef=obj.likes;},3000);
	
	}
/*
	if(type="photo"){
	topa.href="https://mbasic.facebook.com/photo.php?fbid="+link_id;
	topa.click();
	curl("https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D"+link_id);
	setTimeout(function (){window.likes1=window.curl;var obj = JSON.parse(window.likes1); window.likef=obj[0].like_info.like_count;},3000);
	
	}
*/
}
function getconfirm(span,link_id,type){
	document.getElementById('confirm'+span).style.display="none";
	document.getElementById('loading'+span).style.display="inline-block";
	if(type="page"){
	curl("http://graph.facebook.csom/"+link_id);
	setTimeout(function (){window.likes1=window.curl;var obj = JSON.parse(window.likes1); window.likes=obj.likes;
	if(window.likes>window.likef){
		document.getElementById('confirm'+span).style.color="green";
		document.getElementById('confirm'+span).innerHTML="Liked";
		document.getElementById('confirm'+span).style.display="inline-block";
		}else{
		document.getElementById('confirm'+span).style.color="red";
		document.getElementById('confirm'+span).innerHTML="Not Liked";
		document.getElementById('confirm'+span).style.display="inline-block";
			}
	blinkColor(span+1);
	},3000);
	
	}
	if(type="photo"){
	curl("https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D"+link_id);
	setTimeout(function (){window.likes1=window.curl;var obj = JSON.parse(window.likes1); window.likes=obj[0].like_info.like_count;
	if(window.likes>window.likef){
		document.getElementById('confirm'+span).style.color="green";
		document.getElementById('confirm'+span).innerHTML="Liked";
		document.getElementById('confirm'+span).style.display="inline-block";
		}else{
		document.getElementById('confirm'+span).style.color="red";
		document.getElementById('confirm'+span).innerHTML="Not Liked";
		document.getElementById('confirm'+span).style.display="inline-block";
			}
	blinkColor(span+1);
	},3000);
	
	}
}
function curl(url){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   window.curl=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
function clicked_like(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   window.curl=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","clicked.php",true);
xmlhttp.send();
}
</script>
<?php // include 'foot.php'; 
$open = fopen("hit.html", "r+");
$value = fgets($open);
$close = fclose($open);

$value++;
$open = fopen("hit.html", "w+");
fwrite($open,$value);
fclose($open);
echo "hit:{$value}";
?>