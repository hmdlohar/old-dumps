<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$dirname = ".";
$dir = opendir($dirname);

while(false != ($file = readdir($dir)))
{
if(($file != ".") and ($file != "..") and ($file != "index.php"))
{
  $list[] = $file;
}
}

sort($list);

foreach($list as $item) {
echo("$item-hmd-");
}

?>