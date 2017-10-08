<?php
$dir = "./";

// Sort in ascending order - this is default
$a = scandir($dir);

for($x=0;$x<sizeof($a);$x++){
	      echo "<a href='{$a[$x]}'>{$a[$x]}</a><br>";
}
?>   