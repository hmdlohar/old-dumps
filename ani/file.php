<title> EMWPA</title>

<?php
include 'db.php';
include 'bernarx.php';
if (isset($_GET['cat'])) {
$cat = $_GET['cat'];
}
else	{
$cat = 'new';
}
if (isset($_GET['view'])) {
$view = $_GET['view'];
}
else	{
$view = 'photos';
}
?>


<link rel="stylesheet" type="text/css" href="style.css" />
<div id="header">
<div class="title"> <font color=red>HOT</font> ANISHA </div>



<div class="topbernar"> <?php echo $bernar1; ?> </div>


</div>


<div id="topmenu">
<div class="wrapper">
<div id="mobileleft" style="display:none;">

</div>

<div id="left">
<?php
 
$sql = "SELECT id,name,link
	FROM menu";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

$name = $row['name'];
$id = $row['id'];
$link = $row['link'];


echo           	"<div class=menuoption><a href=?view={$link}> {$name} </a></div>
                ";
}         
?>
</div>


<div id="mobileright" style="display:none;">
<a href="#" id="pull"><="/images/nav-icon.png" /></a>
</div>

</div>
</div>
<div class="wrapper">

<div id="leftcol">
<div class="mini-logo">

</div>
<ul class="menu">
<li class="heading">
<?php
 
$sql = "SELECT id,name,link
	FROM menu
	WHERE link='$view'";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

$name = $row['name'];
$id = $row['id'];
$link = $row['link'];
echo           	"{$name}
                ";
}
?>

</li>
<?php
 
$sql = "SELECT id,name,link
	FROM $view";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

$name = $row['name'];
$id = $row['id'];
$link = $row['link'];



echo           	"<li><a target='_top' href=?view={$view}&cat={$link} title={$name}>{$name}</a></li>
                ";
}         
?>
<?php

 echo $bernar2; ?>
</ul>


</div>
<div id="middlecol">
<h2>
<?php

 echo $bernar3; ?>
</h2>
<h1>Ooltoo -  Real Girls Pic </h1>
<li class="contain">Like Page<font color=red> <a href=http://www.facebook.com/ooltoo> Ooltoo - Real Girls Pic</a>
<center>
<?php

echo $bernar6;
include "pics/$cat.php";

?>
</center>
</li>
<div class="next"> </div>




</div>
<div id="rightcol">
<?php echo $bernar4; ?>

<br>
<br>


</div>

<div id="bottommenu">
<?php echo $bernar5; ?>
dsfsdaf<br>
<?php
include 'countx.php';
?>

</div>

