<?php
include '../files/var.php';
include '../files/db.php';
if (isset($_POST['name'],$_POST['link'])){
	$name = $_POST['name'];
	$link = $_POST['link'];
	$hit = $_POST['hit'];
	$other = $_POST['other'];
	
	$sql = 	"INSERT INTO page".
			"(name,link,hit,points,credits,states,userid,other) ".
			"VALUES ".
			"('$name','$link','$hit','0','0','0','0','$other')";
			mysql_select_db($dbname);
			$retval = mysql_query( $sql, $conn );
			if(! $retval )
			{
			die('Could not enter data: ' . mysql_error());
			}
	
	}
?>
<form action=in_page.php method=POST>
Name : <input type=text name=name><br>
Link : <input type=text name=link><br>
Hit : <input type=text name=hit value=0><br>
Other : <input type=text name=other><br>
<input type=submit>

</form>
