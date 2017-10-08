<?php 
$dir = "../gallery/";


// Sort in descending order
$b = scandir($dir,1);
for($x=0;$x<sizeof($b)-2;$x++){
	echo "<div style='display:block'><lable><input type=checkbox id={$b[$x]} class=gallery_check style='vertical-align: middle;margin:auto;display:inline-block'><img src='../gallery/{$b[$x]}' height=100 width=100 style='display:-inline-block;vertical-align: middle'></lable></div>";
}

?>