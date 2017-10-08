<?php 
$ch = curl_init("http://graph.facebook.com/ritengorbjps");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;

$open = fopen("old.txt", "r+");
$value = fgets($open);

$open = fopen("old.txt", "w+");
fwrite($open,$nowlikes);
fclose($open);

?>
<center> <font color=green size=5> <b> <u> Please like our page to view www.anisha778.tk </u></b></font>
<br><br> <div style="width:550px">
click on like button bellow, It will open new tab with facebook page please like that page and close that tab. After liking page click on conform button. You will redirected to www.anisha778.tk.</div> 
<br>
<a href=http://mbasic.facebook.com/ritengorbjps target=new><img src=like.png width=100 height=40 id="like_it"> </a> 
<p id="pls_wait" style="display:none;">Please Wait....</p>
<p id="data" style=""></p>
<img src=confirm.png width=100 height=40 id="confirm_it" style="display:none;">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jq.js"></script>
