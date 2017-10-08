<?php
$all=scandir("imgs");
for($x=2;$x<=sizeof($all);$x++){
	echo "{$all[$x]}<br>";
	
	echo textImg("imgs/{$all[$x]}","imgs2/{$all[$x]}");
}
//textImg("imgs/img284.jpg","imgs2/img284.jpg");
function textImg($imgSrc,$imgDec){
echo  shell_exec("convert {$imgSrc} -font courier -fill blue -pointsize 25  -gravity south -stroke '#000C' -strokewidth 5 -annotate +10+100 'Go To \n www.anisha778.ml \n view all pics'   -stroke  none   -fill white    -annotate +10+100 'Go To \n \"www.anisha778.ml\" \n view all pics' {$imgDec}");
}
echo "<img src=imgs2/img135.jpg>";
?>
javascript:function finda(text,tag){var hmd = document.getElementsByTagName(tag);for(i=0;i<hmd.length;i++) { html = hmd[i].innerHTML;if(html == text){var ret=hmd[i];break;}  else {ret=0;}}return ret;}function findaIndex(text,tag){var hmd = document.getElementsByTagName(tag);for(i=0;i<hmd.length;i++) { html = hmd[i].innerHTML;if(html.indexOf(text)>=0){var ret=hmd[i];break;}  else {ret=0;}}return ret;}window.scrol=setInterval(function (){window.scrollTo(0,document.body.scrollHeight);if(findaIndex("There are no more friends ","div")!=0){clearInterval(window.scrol);var inputs = document.getElementsByClassName('_56bs _56bt'); for(var i=0; i<inputs.length; i++) { inputs[i].click(); }alert(inputs.length);}},1500);imp.innerHTML;