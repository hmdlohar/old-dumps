<?php
$ch = curl_init("http://graph.facebook.com/ritengorbjps");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;
$open = fopen("old.txt", "r+");
$value = fgets($open);
if ($nowlikes > $value){
$expire=time()+60*60*24*30;
setcookie("liked", "liked", $expire, '/');
echo "yes";
$openi = fopen("confirm.html", "r+");
$valuei = fgets($openi);
$closei = fclose($openi);

$valuei++;
$openi = fopen("confirm.html", "w+");
fwrite($openi,$valuei);
fclose($openi);
}
else{
	echo "no";
	$openi = fopen("out.html", "r+");
$valuei = fgets($openi);
$closei = fclose($openi);

$valuei++;
$openi = fopen("out.html", "w+");
fwrite($openi,$valuei);
fclose($openi);
	}
?>
