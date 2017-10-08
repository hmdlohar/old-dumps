<?php

function now($link,$field) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->$field;
	echo $nowlikes;
	
	}
	
	function nowname($link) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->name;
	echo $nowlikes;
	
	}
	function nowid($link) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->id;
	echo $nowlikes;
	}
	function nowlikes($link) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->likes;
	echo $nowlikes;
	}
?>
