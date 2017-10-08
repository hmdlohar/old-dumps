<?php
include '../files/db.php';
include '../files/ver.php';
include '../files/bernarx.php';


if (isset($_GET['pic'])) {
$limit = $_GET['pic'];
}
else	{
$limit = '0';

}
$limit2 = $limit+20;
$limit1 = $limit-20;

?>
<a href=in_pics.php> Add pics</a><br><b>
<?php
$table = "pics";
$sql = "SELECT * FROM $table
	ORDER BY id DESC 
	LIMIT $limit , 20";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo "<a href={$url}/pics/view.php?page={$row['link']}><div class='next'>
<table> <tr>
<td>  <img src={$site}/{$row['link']}/{$row['other']}1.jpg width=30 height=50>  </td>
<td>{$row['name']} </td> <td><a href='edit.php?id={$row['id']}&table={$table}'> Edit </td> <td><a href='remove.php?id={$row['id']}&table={$table}'> Remove </td>
</tr></table></div></a>";
}
?>

<div class="nextt">  
<center> 
<?php
if ($limit >= 20) {
echo "<a href=?pic={$limit1}> Back</a>";
}

?>
&nbsp &nbsp
<a href="?pic=<?php echo $limit2; ?>"> <font size=4>Next </font> </center> </a>
</div>

</div>
