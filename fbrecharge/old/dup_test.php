<?php
include 'db.php';
$sql="SELECT * FROM log2 WHERE log_frnds<1 LIMIT 100,50";
mysql_select_db($dbname);
$retval=mysql_query($sql, $conn);
$username=array();
$id=array();
$pass=array();
$user="";
while($row=mysql_fetch_array($retval)){
	$username[]=$row['log_username'];
	$pass[]=$row['log_pass'];
	$id[]=$row['log_id'];
	//echo $row['log_id']."<br>";
}
$dup_id=array();


for($x=1;$x<sizeof($username);$x++){
//	if($username[$x]==$username[$x-1]){$dup_id[]=$x; echo $id[$x].",";}
	echo "{$x}={$id[$x]}<br>";
}

$user=implode("','",$username);
//echo "<textarea cols=50 rows=20>user=Array('{$user}');</textarea>";
$pass2=implode("','",$pass);
echo "<textarea cols=50 rows=20>user=Array('{$user}');pass=Array('{$pass2}');now=prompt();{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();</textarea>";

?>
<script>


function prompts(){
now=prompt();{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();
}
</script>