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

$link = $_GET['link'];
?>
<a href=likes.php?link=1> High Quality Likes__</a> <a href=likes.php?link=2> Low Quality likes__</a> <a href=likes.php?link=3> Fan Page Auto Likes__</a> <a href=likes.php?link=4> Post Auto Likes__</a> <br /> 

<a href=in_likes.php> Add likes</a><br><b>
<form action=e_likes.php method=POST>
<?php
$table = "likes";
$sql = "SELECT * FROM $table
	WHERE id='$link' ";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
$count = base64_decode($row['count']);
echo "Name: <input type=text name=name value='{$row['name']}'><br>
Link: <input type=text name=link value='{$row['link']}'><br>
Other: <input type=text name=other value='{$row['other']}'><br>
count: <textarea rows=30 cols=90 name=count>{$count}</textarea><br>
<input type=hidden name=id value={$row['id']}> <input type=submit> <br> <a href={$url}/likes/view.php?page={$row['link']} target=blank> view page</a>";
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
