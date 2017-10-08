<?php
include "../common.php";
if(isset($_GET['edit_pics'])){
	$feild=$_GET['edit_pics'];
	$id=$_GET['id'];
	$value=$_GET['value'];
	$sql="update post set $feild='$value' where id=$id";
	$retval=sql_query($sql);
	echo $retval;
}
if(isset($_GET['del_pics'])){
	$id=$_GET['del_pics'];
	$sql="delete from post where id=$id";
	$retval=sql_query($sql);
	echo $retval;
}
if(isset($_GET['hit_reset'])){
	$uri=$_GET['hit_reset'];
	$type=$_GET['hit_reset_type'];
	$sql="update hits set hit=0 where uri='$uri'&&type='$type'";
	echo sql_query($sql);
}
if(isset($_GET['hit_reset_all'])){
	$uri=$_GET['hit_reset_all'];
	//$type=$_GET['hit_reset_type'];
	$sql="update hits set hit=0";
	echo sql_query($sql);
}
if(isset($_GET['delete_uri'])){
	$uri=$_GET['delete_uri'];
	//$type=$_GET['hit_reset_type'];
	$sql="delete from hits where uri='$uri'";
	echo sql_query($sql);
}
if(isset($_GET['other2'])){
	$id=$_GET['other2'];
	//$type=$_GET['hit_reset_type'];
	$sql="select * from post where id=$id";
	$retval= sql_query($sql);
	while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$other2=$row['other2'];
		echo "<input type=button name=update_other2 onclick=update_other2({$id}) value=Update><span id=result>REsult</span><br>
		<input type=text name=name value={$name} id=name>
		<input type=hidden name=id value={$id} id=other2_id>
		<textarea name=other2 cols=90 rows=35 id=other2>{$other2}</textarea>
		
		
		";
		}
}
if(isset($_POST['update_other2'])){
	$other2=mysql_real_escape_string($_POST['other2']);
	$id=$_POST['id'];
	//$type=$_GET['hit_reset_type'];
	$sql="update post set other2='$other2' where id=$id";
	echo sql_query($sql);
}


?>


<script>
function update_other2(id){
	value=document.getElementById('other2').value;

	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("POST","edit_pics.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("update_other2=yes&other2="+value+"&id="+id);
}
</script>