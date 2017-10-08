<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<?php
include "common.php";

for($x=1;$x<=5;$x++){
//echo 	sql_query("insert into cook (tab) values ({$x})");
}



$ac=array();
$ac['f1']=array("tab","fbrcid","username","passowrd");
$ac['size']=array("2","20","20","20");
$ac['function']=array("edit","edit_status","edit","edit");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0><tr>";
for($d=0;$d<sizeof($ac['f1']);$d++){
	echo "<th>{$ac['f1'][$d]}</th>";
	}
$sql="select * from cook limit 300";
echo "</tr>";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$tab=$row['tab'];
	$fbrcid=$row['fbrcid'];
	$username=$row['username'];
	$passowrd=$row['passowrd'];


	
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value=${$ac['f1'][$j]} size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
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
xmlhttp.open("GET","edit.php?edit=cook&id="+id+"&feild="+field+"&value="+value,true);
xmlhttp.send();
}
function edit_status(field,id,div){
	value=document.getElementById(div).value;
	if(value==0){newval=1;}else{newval=0;}
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
xmlhttp.open("GET","edit.php?edit=ac&id="+id+"&feild=status&value="+newval,true);
xmlhttp.send();
}
function del(id){
//alert(id);
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
xmlhttp.open("GET","edit.php?del="+id,true);
xmlhttp.send();
}


</script>