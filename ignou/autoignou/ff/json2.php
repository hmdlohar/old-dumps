
<?php
include "common.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');


		echo "hiiiiii";
$jd=json_decode($_POST['bm']);
print_r($jd);
//echo "<a href='{$jd->url}'>{$jd->title}</a>{$jd->index}{$jd->group->id}<br>";
	in_bbm($jd->title,$jd->url,$jd->group->title,$jd->id,$jd->index);
for($x=0;$x<sizeof($jd);$x++){
	//echo "<a href='{$jd[$x]->url}'>{$jd[$x]->title}</a>{$jd[$x]->index}{$jd[$x]->group->id}<br>";
	//in_bbm($jd[$x]->title,$jd[$x]->url,$jd[$x]->group->title,$jd[$x]->id,$jd[$x]->index);
}

?>