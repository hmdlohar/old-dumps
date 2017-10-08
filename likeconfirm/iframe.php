<?php 
/*
$ch = curl_init("http://graph.facebook.com/ritengorbjps");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;
echo $nowlikes;
*/
?>
<p id=post2>fd</p>
<script type="text/javascript">
winRef = new Object();
winRef.closed = true;
function openwind(){
winRef = window.open("test2.php", "wind", "width=600,height=400,scrollbars=yes left=200 top=150")
	}

//winRef = window.open("test2.php", "wind", "width=600,height=400,scrollbars=yes left=200 top=150")
function checkwind(){
if (winRef.closed) var states = "closed";
else var states = "open";
document.getElementById("post2").innerHTML = states;
setTimeout(checkwind, 10);
}
checkwind();
</script>
<p onclick="checkwind()">checkwind</p>
<input type=button name=b1 id=b1 value="New window" 
onClick="openwind()">

<input type=button name=b2 id=b2 value="Close the window" 
onClick="if(!winRef.closed)winRef.close();">

<input type=button name=b3 id=b3 value="Check: is it closed?" 
onClick="alert(winRef.closed ? 'It\'s CLOSED!':'It\'s still OPEN!');">
</form>

<p onclick='window.open("test1.php","wind", "width=600,height=400,scrollbars=yes left=200 top=150"); '>hello</p>
<p id=post></p>

<input type=get name=get id=get value=gg>
<p id=text>sdf</p>
<script type="text/javascript">
//var myWindow = open("","MyWindow","'+config+'");
//alert("helo");

function load_fb(){
var value = document.getElementById("get").value;
document.getElementById("post").innerHTML = value;
setTimeout(load_fb, 10);
}
//load_fb();
</script>
<!--
<script src=jquery.js></script>
<script src=jq.js></script>