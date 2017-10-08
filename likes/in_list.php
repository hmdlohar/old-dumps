<form action="in_list.php" method=POST>
Name:- <input name=name> Link:- <input name=link> <br><textarea name=other></textarea> <input  type=submit name=submit>

</form>
<?php
function nowlikes($link) {
	$ch = curl_init("http://graph.facebook.com/$link");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$raw = curl_exec($ch);
	curl_close($ch);
	$data = json_decode($raw);
	$nowlikes = $data->likes;
	echo $nowlikes;
	}
include 'db.php';
if (isset($_POST['submit'])){
	$name= $_POST['name'];
	$link= $_POST['link'];
	$other= $_POST['other'];
$sql = "INSERT INTO likes_list (name,link,other) VALUES ('$name','$link','$other')";	
mysql_select_db($dbname);
mysql_query($sql, $conn);
	
	echo "data submited";
	
}
echo "<table border=1 align=center><tr><th width=120>Name</th><td width=100>Link</td><td width=10>NowLikes</td><td width=300>Other</td></tr>";
$sql2 = "SELECT * FROM likes_list";
mysql_select_db($dbname);
$retval = mysql_query($sql2, $conn);
while($row = mysql_fetch_array($retval)){
	$name= $row['name'];
	$link= $row['link'];
	$other= $row['other'];
	echo "<tr><td>{$name}</td><td>{$link}</td><td>"; //nowlikes($link); 
	echo "</td><td>{$other}</td></tr>";
	}

?>
