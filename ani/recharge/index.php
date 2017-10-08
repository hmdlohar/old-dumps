<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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

<html> 
<head> 
<title>Free Mobile Recharge  By OOltoo </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="keywords" content="Free songs, music, movies, games, pc games, ringtones, videos, etc"> 
<meta name="description" content="Free Downloads For Mobiles"> 
<meta name="author" content="lohar.tk"> 
<meta name="robots" content="all"> 
<link href="style.css" rel="stylesheet" type="text/css"> 
</head>
<body>

<div class="bdr">
<div class="header">Free Mobile Recharge  By OOltoo<br></div>
<center><img src=sims.jpg></center>

</a><br></div>
<div class="hdng"><center>Now your dreams is going to be true. No more retailer! Now get recharge of 200 RS in your mobile just fulfiling the following 3 easy steps. N:B- if you missed any of the following tasks, you will not get the money.</div>
<div class="hdng2"><center><font color=red>Step : 1</font><hr>
At frist press 'Like' button in these following pages.<br>
If you Confirm Like , Show √ this icon. √</div>




<link href="style.css" rel="stylesheet" type="text/css"> 
<div class="bdr">

<div class="bdr">
 <div class="footeru">Like This Pages</div> 


<b><div class='update1'><center>
 <b>
<center>
<font color=green size=3>  Please like our page to view next page </font>
<br><br> 
click on like button bellow, It will open new tab with facebook page please like that page and close that tab. After liking page click on conform button. You will redirected to Next page.</div> 
<br>
<a href=http://mbasic.facebook.com/ritengorbjps target=new> <img src=like.png width=100 height=40> </a> 

<a href=confirm.php> <img src=confirm.png width=100 height=40> </a>
</b> </div></b>
</center>
<b>



</div>


</div> </div>




<div class="footer">
<?php
$open = fopen("hiti.html", "r+");
$value = fgets($open);
$close = fclose($open);

$value++;
$open = fopen("hiti.html", "w+");
fwrite($open,$value);
fclose($open);
echo "hit:{$value}";
?>

</a></div>


</body></html>
