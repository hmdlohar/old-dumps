<?php
include "common.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$file=fopen("json.txt", "r+");

while ($line = fgets($file)) {
  // <... Do your work with the line ...>
  echo($line);
}
fclose($file);
print_r($_POST);

$jd=json_decode($_POST['bm']);
//echo "<script>var text= {$_GET['bm']};</script>";
//print_r($jd[0]);

for($x=0;$x<sizeof($jd);$x++){
	//echo "<a href='{$jd[$x]->url}'>{$jd[$x]->title}</a>{$jd[$x]->index}{$jd[$x]->group->id}<br>";
	//in_bbm($jd[$x]->title,$jd[$x]->url,$jd[$x]->group->title,$jd[$x]->id,$jd[$x]->index);
}

?>