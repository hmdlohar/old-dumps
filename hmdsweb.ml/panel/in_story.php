<form action="" method=POST>
<input type=text name=name id=name>
<input type=text name=link id=link  onfocusout=link2name()>
<input type=text name=total id=total size=2>
<textarea cols=50 rows=15 name=story></textarea>

<input type=submit name=in_pics>
</form>
<p id=result style="position:fixed;top:20px;right:20px">result</p>
<table>
<?php
include '../common.php';
include "../files/db.php";
if(isset($_POST['in_pics'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$total=$_POST['total'];
	$date=$_POST['story'];
	$sql="insert into pics (name,link,date,other)values('$name','$link','$date','sex_story')";
	sql_query($sql);
}
if(isset($_POST['update_date'])){
	//$name=$_POST['name'];
	$link=$_POST['link'];
	$id=$_POST['id'];
	$date=$_POST['date'];
	$sql="update pics set date='$date' where id=$id";
	sql_query($sql);
}
if(isset($_GET['sort'])){
	$sort=$_GET['sort'];
	}else{$sort="id";}

$sql="select * from pics where other='sex_story' order by $sort desc";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$total=$row['total'];
	$status=$row['status'];
	$url=$row['url'];
	$userid=$row['userid'];
	$other=$row['other'];
	$id=$row['id'];
	$date=$row['date'];
	echo "<tr><td><form action='' method=POST>
	<input type=text name=link value={$link}>
	<textarea cols=50 rows=10 name=date>{$date}</textarea>
	<input type=hidden name=id value={$id}>
	<input type=submit name=update_date>
	</form></td></tr>";
}

?>
</table>
<script>
function link2name(){
	hmd=document.getElementById('link').value;
	hmd2=hmd.split("-")[0][0].toUpperCase()+""+hmd.split("-")[0].substring(1)+" "+hmd.split("-")[1][0].toUpperCase()+""+hmd.split("-")[1].substring(1);
	document.getElementById('name').value=hmd2;
}

</script>