<?php
include 'db.php';
include 'common.php';
if (isset($_GET['name'] , $_GET['link'])){
	$name=mysql_real_escape_string($_GET['name']);
	$link=mysql_real_escape_string($_GET['link']);
	$other=mysql_real_escape_string($_GET['other']);

$sql1 = "SELECT * FROM hmdbm WHERE link='$link'";
mysql_select_db($dbname);
$retval_count = mysql_query($sql1, $conn);
$count = mysql_num_rows($retval_count);
if ($count >= 1){
	echo "Link Already Bookmarked";
	}
	else{
header("Location: index.php");
$sql = "INSERT INTO hmdbm
		(name,link,other,hit)
		VALUES
		('$name','$link','$other','hmdbm')";
mysql_select_db($dbname);
mysql_query($sql, $conn);
}
}
if (isset($_GET['delete'])){
	if(isset($_GET['del_confirm'])){
	$dlink = $_GET['delete'];
	$sqld = "DELETE FROM hmdbm WHERE id='$dlink'";
	mysql_select_db($dbname);
	$retval = mysql_query($sqld, $conn);
	if (! $retval){
		die('Could not delete: ' . mysql_error());
	}echo "DELETED";
	header("Location: index.php");	
	}else{
		echo "Do u Really want to delete??<br><a href=?delete={$_GET['delete']}&del_confirm=yes>Yes</a>----<a href=index.php>No</a>";
	}

}

if (isset($_POST['elink'])){
	$name=mysql_real_escape_string($_POST['name']);
	$id=mysql_real_escape_string($_POST['id']);
	$link=mysql_real_escape_string($_POST['link']);
	$other=mysql_real_escape_string($_POST['other']);
$result=sql_query("update hmdbm set name='{$name}',link='{$link}',other='{$other}' where id={$id}");
if($result==1){
	header("Location: index.php");
	}else{
		echo $result;
		}
}
?>
<a href=index.php>Back To Home PAge</a>