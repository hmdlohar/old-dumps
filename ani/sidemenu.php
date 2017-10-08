<!-- Side menu start -->
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
Letest Photos
<?php
$sql = "SELECT * FROM pics
	ORDER BY id DESC 
	LIMIT 7";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<li><a href={$url}/pics/view.php?page={$row['link']}>{$row['name']}</a></li>";
}
?>
</ul>
<ul class="menu">
<li class="heading">
Letest 18+ Photos
<?php
$sql = "SELECT * FROM xxxpics
	ORDER BY id DESC 
	LIMIT 7";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<li><a href={$url}/xxxpics/view.php?page={$row['link']}>{$row['name']}</a></li>";
}
?>
</ul>
</ul>
<ul class="menu">
<li class="heading">
Facebook Likes
<?php

$sql = "SELECT * FROM likes 
	LIMIT 7";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<li><a href={$url}/likes/view.php?page={$row['link']}>{$row['name']}</a></li>";
}
?>
</ul>
<div id="bernar2"> <?php
echo "{$bernar2}";
?></div>
</div>
<!-- Side Menu End -->
