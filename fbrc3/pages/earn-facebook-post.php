
<!--
<center>
<h1>page under construction. </h1>
<img src=img/uc.png width=400>
</center>
-->
<?php
$page_id = "ritengorbjps";

$loged = isLoged();
if ($loged == 0){
	header("Location: {$site}/login.php");
	}
if ($loged == 2){
	header("Location: {$url}/?view=confirm_email&list=confirm_email");
	}
//$likesnow = $_COOKIE['likesnow'];

?>
<script>
window.hi = "ee";
</script>
<span id=page_header>Facebook Photo Likes</span><br><br>

<p id=para>
Like Facebook Page and get money. You can get upto Rs.0.20/- for every Facebook Page You like. First Click On Like Button the new window will open with faecbook Photo. Like that facebook Photo and clsoe the window. Wait for 2-3 second and you will get money for liking it.
</p>
<div id=next_page>
<center>
	<p id=message3 style="display:block; font-size:20px; width:auto; color:green" class=message>
You will Get $rs for Liking This.
</p>
<p id=message1 class=message>
congratulation! You get Rs.0.10 for this page
</p>
<p id=message2 class=message>
Sorry!  it seams you don't liked this page.
</p>
<p id=page_name>Riten Gor</p>
<img id=page_pic src="img/fb.png" height=200px width=150px>
<br>
<div id=like_button class=like_button onclick="getlikes(window.hi)">Like</div><img id=loading src="img/loading.gif" style="display:none">
<img id=loading src="img/loading.gif" style="display:none">

</center>
</div>

<div id=next_page2 style="display:none">
	<center>
<br><br><br>
<img id=loading src="img/loading.gif">
<br><br><br>
</center>
</div>
<div id=page_full style="display:none">
	<center>
<br><br><br>
<h1>Sorry No Page To Like</h1>

<br><br><br>
</center>
</div>



<script type="text/javascript">
window.onload=next_page();	
function next_page(){
	document.getElementById('next_page').style.display="none";
	document.getElementById('next_page2').style.display = "block";
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
	if(xmlhttp.responseText=="" || xmlhttp.responseText== null){
		page_full();
		}
	window.next_obj=JSON.parse(xmlhttp.responseText);
    }
  }
xmlhttp.open("GET","pages/next_page.php?type=earn-facebook-post",true);
xmlhttp.send();
window.next_timeout=setTimeout("next_page2()",2000);
}	

function next_page2(){
var pint =window.next_obj[3]-0.01;
document.getElementById('message3').innerHTML="You will Get Rs."+pint+" for Liking This.";
//document.getElementById('like_button').onclick="getlikes('"+window.next_obj[10]+"')";
window.hi=window.next_obj[10];
document.getElementById('page_name').innerHTML=window.next_obj['name'];
document.getElementById('next_page').style.display="block";
document.getElementById('next_page2').style.display = "none";	
document.getElementById('like_button').style.display = "block";
document.getElementById('message2').style.display = "none";
document.getElementById('message1').style.display = "none";
}
	
winRef = new Object();
winRef.closed = true;
function winref(){
if (winRef.closed) var states = 0;
else var states = 1;
if (states == 0) { getlikes2(window.hi); clearInterval(window.inter); } 
}
function getlikes(page_id){
window.inter = setInterval(winref, 1000);
 document.getElementById('like_button').style.display = "none";
winRef = window.open("http://mbasic.facebook.com/"+page_id, "wind", "width=600,height=400,scrollbars=yes left=200 top=150")
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
   var data=xmlhttp.responseText;
  // document.getElementById("data").innerHTML= data;
   var obj = JSON.parse(xmlhttp.responseText);
   //document.getElementById("data2").innerHTML= obj.likes;
   window.likes =  obj[0].like_info.like_count;
    }
  }
xmlhttp.open("GET","https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D"+page_id,true);
xmlhttp.send();
}

function process_like(page_id,result){
	points=window.next_obj[3]-0.01;
	userid=window.next_obj[6];
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
	window.process= xmlhttp.responseText;
	document.getElementById('coins').innerHTML=window.process;
	
    }
  }
xmlhttp.open("GET","pages/process_like.php?action=earn-facebook-post&id="+window.next_obj[0]+"&result="+result+"&points="+points+"&userid="+userid,true);
xmlhttp.send();	
}

function getlikes2(page_id){
document.getElementById('loading').style.display = "block";

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
		
    
   var data=xmlhttp.responseText;
  // document.getElementById("data").innerHTML= data;
   var obj = JSON.parse(xmlhttp.responseText);
   //document.getElementById("data2").innerHTML= obj.likes;
   window.likes2 =  obj[0].like_info.like_count;
if (window.likes < window.likes2){
document.getElementById('loading').style.display = "none";
document.getElementById('message1').style.display = "block";


process_like(page_id,'yes');
setTimeout("next_page()",2000);
	}
else{
document.getElementById('loading').style.display = "none";
document.getElementById('message2').style.display = "block";


process_like(page_id,'no');
setTimeout("next_page()",2000);
	}
    }
  }
xmlhttp.open("GET","https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D"+page_id,true);
xmlhttp.send();
//window.gl2 = setTimeout(getlikes2, 100);
}
function page_full(){
	document.getElementById('next_page').style.display="none";
	document.getElementById('next_page2').style.display="none";
	document.getElementById('page_full').style.display="block";
}
</script>