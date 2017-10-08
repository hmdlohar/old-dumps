<?php 
if (isset($_COOKIE['likeddd'])) {
header("Location: confirm_first");

}
?>
<div id="header">
<div class="title"> <font color=red>HOT</font> ANISHA </div>
<div class="topbernar"> 
<?php
echo "{$bernar3}";
?>
</div>
</div>
<div id="topmenu">
<div class="wrapper">
<div id="mobileleft" style="display:none;">
</div>
<div id="left">
<?php
$sql = "SELECT * FROM mm";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<div class=menuoption><a href={$url}/{$row['link']}> {$row['name']} </a></div>";
}
?>
</div>
<!-- Head end -->
