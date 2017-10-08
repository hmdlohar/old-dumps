<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<p><?php  ?></p>
<a href="?status=running">Running</a>
<a href="?status=stoped">stoped</a>

<?php
include "common.php";
if(isset($_GET["status"])){
	$status=$_GET["status"];
	if($status=="running"){
		$retval=sql_query("select * from cookie_id where status=1");
	}
	if($status=="stoped"){
		$retval=sql_query("select * from cookie_id where status=0");
	}
}else{
		$retval=sql_query("select * from cookie_id");
	}
$running=mysql_fetch_array(sql_query("select count(id) from cookie_id where status=1"));
$stoped=mysql_fetch_array(sql_query("select count(id) from cookie_id where status=0"));
echo "<p id=running>Running == {$running[0]} && Stoped == {$stoped[0]}</p>";
echo "<table border=1 cellspacing=0>";
while($row=mysql_fetch_array($retval)){
	$username=$row['username'];
	$fbrc_id=$row['fbrc_id'];
	$date=$row['date'];
	$id=$row['id'];
	$pass=$row['pass'];
	$status=$row['status'];
	
	
	echo "<tr><td>{$id}</td><td><input type=text value='{$fbrc_id}' size=8 id=fbrc_id{$id}><button onclick=edit('fbrc_id',{$id},'fbrc_id{$id}')>ED</button></td><td>{$username}</td><td>{$pass}</td><td><input value='{$username}-hmd-{$pass}'></td><td>{$status}</td></tr>";
	
	if(isset($_GET['update_username'])){
		$retval2=sql_query("select username,pass from log where id={$fbrc_id}");
		$row2=mysql_fetch_array($retval2);
		echo sql_query("update cookie_id set username='$row2[0]', pass='$row2[1]' where id={$id}");
	}
	
	
}
?>
<script>
function edit(field,id,div){
	value=document.getElementById(div).value;
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
xmlhttp.open("GET","edit.php?edit=cookie_id&id="+id+"&feild="+field+"&value="+value,true);
xmlhttp.send();
}
</script>
