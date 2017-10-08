<table>

<?php
include '../files/db.php';
include '../common.php';

$sql="SELECT * FROM user";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$username=$row['username'];
	$id=$row['id'];
	$pass=$row['password'];
	$email=$row['email'];
	$money=$row['money'];
	$page_array=$row['page_array'];
	$gender=$row['gender'];
	
	echo "<tr><td>{$username}</td><td>{$pass}</td><td>{$email}</td><td><input type=text id=money{$id} size=2 value={$money}><span onclick=edit('money',{$id},'money{$id}')>ED</span></td><td><input type=text id=page_array{$id} value={$page_array}> <span id=edit{$id} onclick=edit('page_array',{$id},'page_array{$id}')>ED</span></td><td>{$gender}</td><td><span onclick=del({$id})>DEL</span></td></tr>";
	}
?>

</table>

<script>
function edit(field,id,value){
	var xmlhttp;
	valueid=document.getElementById(value).value;
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
alert(data);
    }
  }
xmlhttp.open("GET","user_edit.php?opedit=yes&field="+field+"&id="+id+"&value="+valueid,true);
xmlhttp.send();
}
function del(id){
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
alert(data);
    }
  }
xmlhttp.open("GET","user_edit.php?opdel=yes&id="+id,true);
xmlhttp.send();
}
</script>