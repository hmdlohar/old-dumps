<?php 
$ch = curl_init("http://graph.facebook.com/ritengorbjps");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;

echo $nowlikes;


?>