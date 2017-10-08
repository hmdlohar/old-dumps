<title>Confirm Like </title>

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
setcookie("like","done",time()+3600*24*30,"/");
echo "<script type=text/javascript>
window.location = 'page2.php';
</script>";
}
else
{
echo "<center> <font color=green size=5> <b> <u> Like Again </u></b></font>
<br><br> <div style='width:550px'>
We Did't get you liked this page. Please like this page again. click on like button bellow:</div> 
<br>
<a href=http://mbasic.facebook.com/ritengorbjps target=new> <img src=like.png width=100 height=40> </a> 

<a href=confirm.php> <img src=confirm.png width=100 height=40> </a>";
}

?>
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
