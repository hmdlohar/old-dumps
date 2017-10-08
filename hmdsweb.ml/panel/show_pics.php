
<form action="" method=GET>
<select name=redirs>
<?php 
$open = fopen("redirs.html", "r+");
$value = fgets($open);
$str=explode("-hmd-",$value);
for($x=0;$x<sizeof($str);$x++){echo "<option value={$str[$x]}>{$str[$x]}</option>";}
?>
</select>

<input type=submit name=show_url>
</form>
<p id=result style="position:fixed;top:20px;right:20px">result</p>
<table>
<?php
include "../common.php";
include "../files/db.php";
if(isset($_POST['in_pics'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$total=$_POST['total'];
	in_pics($name,$link,$total,1,"http://emwpa3.tk/pics");
}
if(isset($_GET['show_url'])){
	$urls="http://".$_GET['redirs']; 
	}else{
		$sub=date("hm");
		$urls="http://ooltoo.in";}
if(isset($_GET['sort'])){
	$sort=$_GET['sort'];
	}else{$sort="id";}
$sql="select * from menu order by $sort desc limit 50";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$status=$row['status'];
	$perent=get_perent($row['perent']);
	$id=$row['id'];
	echo "<tr><td><input type=text id=link{$id} value='{$link}' size=15><span onclick=edit('link','link{$id}',{$id})></span></td>
	<td><input type=text id=url{$id} value='http://www.ooltoo.in/?page={$perent}&obj={$link}' size=10><span onclick=edit('url','url{$id}',{$id})></span></td>
	<td><input type=text id=url{$id} value='{$urls}/?page={$perent}&obj={$link}' size=70><span onclick=edit('url','url{$id}',{$id})></span></td>
	<!--
	<td><input type=text id=status{$id} value='{$status}' size=2><span onclick=edit_status('status','status{$id}',{$id})></span></td>
	<td><span onclick=del({$id})>DEL</span></td>--><td><a href='{$urls}/?page={$perent}&obj={$link}' target={$link}>GOTO</a></td>
	</tr>";
	}
?>
</table>