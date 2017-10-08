<?php 
if(isset($_GET['emailNum'])){
	$emailNum=$_GET['emailNum'];
}else{
	$emailNum="1";
}
include "common.php";
$sql=sql_query("select email from usa4 where id={$emailNum}");

while($row=mysql_fetch_array($sql)){
	echo $row['email'];
}

?>