<?php


function nowlikes($link) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->likes;
	echo $nowlikes;
	}
nowlikes('ritengorbjps');
?>
