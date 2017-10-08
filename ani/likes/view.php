<style type="text/css"><!-- body{background-color:#2d2d2d;margin:0;padding:0;background-image:url('../image/background.png');background-repeat:repeat-x repeat-y;}#top-stripe{width:100%;height:100px;background-color:white;}#header-container{width:1024px;height:100px;margin-left:auto;margin-right:auto;}#logo{float:left;}#menu-container{float:right;}#menu-container a{float:right;margin-left:13px;margin-top:45px;font-family:lato;font-size:13px;text-decoration:none;color:#7f7f7f;}#menu-container a:hover,#menu-container .active{color:#ff0048;}#banner-container{width:100%;height:448px;background-image:url('http://www.buycheapfollowersfast.com/image/banner-background.png');}#banner-content{width:1024px;height:448px;margin:0 auto 0 auto;}#bnr-shadow{margin-top:-5px;}#bnr-image{float:left;margin-top:-37px;}#banner-text-container{float:right;width:395px;margin-right:54px;margin-top:95px;}h1{font-family:lato;color:black;text-align:center;margin:0;}#bnr-tagline{font-family:lato;font-size:25px;color:#9aa400;text-align:center;margin:5px 0 0 0;}#bnr-intro{font-family:lato;font-size:13px;color:#7f7f7f;text-align:center;margin:25px 0 0 0;}#content-container{width:100%;background-color:white;}#content-area{width:1024px;margin:0 auto 0 auto;}#promo-box{width:1024px;height:173px;background-image:url('http://www.buycheapfollowersfast.com/image/promo-box-background.png');}h2{font-family:lato;color:black;text-align:center;margin:0;padding:55px 0 0 0;}#snd-tle{font-family:lato;font-size:13px;color:#7f7f7f;text-align:center;margin:5px 0 0 0;}#price-container{height:279px;margin-top:50px;}.price{width:247px;height:400px;background-color:#f3f2f2;float:left;border-radius:5px;}.price-header{height:80px;background-color:#BAC600;border-radius:5px;}.package{font-family:lato;font-size:24px;margin:0;padding:0;text-align:center;padding-top:25px;font-weight:bold;color:white;}.price-dollar{font-family:lato;font-size:40px;font-weight:bold;text-align:center;padding-top:13px;margin:0;margin-bottom:8px;color:#7f7f7f;}.package-addinfo{font-family:lato;font-size:13px;margin:20px 0 20px 0;text-align:center;color:#7f7f7f;}.package-addinfo2{font-family:lato;font-size:25px;margin:20px 0 20px 0;text-align:center;color:#7f7f7f;}.package-addinfo hr{width:200px;margin:0 0 0 23px;border:none;height:1px;background-color:#CFCFCF;}.view-button{margin-left:60px;}.gn_price{width:334px;height:455px;background-color:#f3f2f2;float:left;border-radius:5px;}.gn_price-header{height:80px;background-color:#BAC600;border-radius:5px;}.gn_package{font-family:lato;font-size:24px;margin:0;padding:0;text-align:center;padding-top:25px;font-weight:bold;color:white;}.gn_price-dollar{font-family:lato;font-size:20px;font-weight:bold;text-align:center;padding-top:13px;margin:0;margin-bottom:8px;color:#7f7f7f;}.gn_as_from{position:absolute;font-family:lato;font-size:18px;color:#7f7f7f;margin:-65px 0 0 50px;font-weight:bold;}.gn_package-addinfo{font-family:lato;font-size:13px;margin:20px 0 20px 0;text-align:center;color:#7f7f7f;}.gn_package-addinfo hr{width:288px;margin:0 0 0 23px;border:none;height:1px;background-color:#CFCFCF;}.gn_view-button{margin-left:103px;}#sp{margin-top:70px;}#why{font-family:lato;font-size:22px;font-weight:bold;color:black;text-align:center;margin-top:45px;}#reasons-container{margin-top:30px;padding-bottom:45px;}#reasons-container:after{content:".";visibility:hidden;display:block;height:0;clear:both;}.reason{font-family:lato;font-size:13px;float:left;width:300px;height:140px;}.reason p{font-family:lato;font-size:13px;color:#7f7f7f;}#footer{width:1024px;margin:0 auto 0 auto;}#footer:after{content:".";visibility:hidden;display:block;height:0;clear:both;}#copyright-text{width:394px;font-family:lato;font-size:13px;color:#bbbbbb;float:left;margin:30px 0 15px 0;}#copyright-text a{text-decoration:none;color:#bbbbbb;}#addinfo{width:394px;font-family:lato;font-size:13px;color:#bbbbbb;float:right;margin:30px 0 15px 0;text-align:right;}#addinfo a{text-decoration:none;color:#bbbbbb;font-weight:bold;}#addinfo a:hover{color:white;}--></style> 

<?php
$page = $_GET['page'];
include '../files/db.php';
include '../files/ver.php';
include "../files/{$bernarx}";

$sql = "SELECT * FROM likes
	WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$name = $row['name'];
$link = $row['link'];
$hit = $row['hit'];
$other = $row['other'];
$count = base64_decode($row['count']);

}




?>
<link rel="stylesheet" type="text/css" href="../files/style.css" />
<title> EMWPA - <?php echo "{$name}"; ?></title>
<?php
include '../head.php';
include '../sidemenu.php';
?>
<div id="middlecol">
		<h2>  
<?php
echo "{$bernar1}";

?>
  </h2>
<h1>
<?php
echo "{$name}";
?>
 </h1>
</li>
<?php
echo "{$count}";
?>
<br><br>

</div>
<!--
<div class="nextt">  <a href="videos">
<center><font size=4>Back </a> &nbsp &nbsp &nbsp<a href=next> Next </font> </center> </a>
</div>
-->

</div>

<?php 
include '../rightcal.php';
?>

<?php
$nhit = $hit+1;
echo $nhit;
$sql = "UPDATE likes
	SET hit='$nhit'
	WHERE link='$page'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}


?>



