<?php
error_reporting(0);
if (isset($_POST['page'])){
$page = $_POST['page'];
$ch = curl_init("http://graph.facebook.com/$page");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->gender;
if (isset($nowlikes)){
	echo "";
	}
else{
	$states = "This is not valude facebook page";
	}
	echo $states;
}
?>
