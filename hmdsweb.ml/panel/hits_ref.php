
<span onclick="resetall()">Reset All</span>
<hr>
<table>
	<?php
include '../files/db.php';
include '../common.php';
$total_hit=0;
$sql="SELECT * FROM hits where type='ref' ORDER BY uri";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
while($row=mysql_fetch_array($retval)){
	$uri=$row['uri'];
	$id=$row['id'];
	$hit=$row['hit'];
	$type=$row['type'];
	$other=$row['other'];
	$total_hit +=$hit;
	echo "<tr><td>{$id}</td><td>{$uri}</td><td>{$hit}</td><td><span onclick=hitreset('{$uri}','{$type}')>RESET</span></td><td>---<span onclick=delete_uri('{$uri}')>DELETE</span></td></tr>";
	}echo $total_hit;
?>

</table>

<script>
function hitreset(uri,type){
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
xmlhttp.open("GET","edit_pics.php?hit_reset="+uri+"&hit_reset_type="+type,true);
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
xmlhttp.open("GET","edit_pics.php?hit_reset_all=yes",true);
xmlhttp.send();
}
function delete_uri(uri){
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
xmlhttp.open("GET","edit_pics.php?delete_uri="+uri,true);
xmlhttp.send();
}


</script>