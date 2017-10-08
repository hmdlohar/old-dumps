
<span onclick="resetall()">Reset All</span>
<hr>
<table>
	<?php
include '../files/db.php';
include '../common.php';

$sql="SELECT * FROM hits ORDER BY uri";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$uri=$row['uri'];
	$id=$row['id'];
	$hit=$row['hit'];
	$other=$row['other'];
	
	
	echo "<tr><td>{$id}</td><td>{$uri}</td><td>{$hit}</td><td><span onclick=hitreset({$id})>RESET</span></td></tr>";
	}
?>

</table>

<script>
function hitreset(id){
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
xmlhttp.open("GET","user_edit.php?hitreset=yes&id="+id,true);
xmlhttp.send();
}
function resetall(){
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
xmlhttp.open("GET","user_edit.php?resetall=yes",true);
xmlhttp.send();
}


</script>