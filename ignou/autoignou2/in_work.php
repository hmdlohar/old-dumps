<form action="" method=POST>
Enrol_start:<input type=text name=enrol_start>
Enrol_end:<input type=text name=enrol_end>
<input name=in_work type=submit>
</form>
<p id=result style="position:fixed;right:25px;top:20px;">result</p>

<?php
include "common.php";
if(isset($_POST['in_work'])){
	$enrol_start=$_POST['enrol_start'];
	$enrol_end=$_POST['enrol_end'];
	$retval=sql_query("select id,enrol_start,enrol_end from work where enrol_start = $enrol_start || enrol_end = $enrol_end");
	if(mysql_num_rows($retval)==0){
		echo sql_query("insert into work (enrol_start,enrol_end,file,enrol_current) values ($enrol_start,$enrol_end,$enrol_start,$enrol_start)");
		}else{echo "alerady Running"; $row=mysql_fetch_assoc($retval); print_r($row);}
}

$ac=array();
$ac['f1']=array("id","enrol_start","enrol_end","enrol_current");
$ac['size']=array("2","20","20","20");
$ac['function']=array("edit","edit","edit","edit");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0>";
$sql="select * from work";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$enrol_start=$row['enrol_start'];
	$enrol_end=$row['enrol_end'];
	$enrol_current=$row['enrol_current'];
	
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value=${$ac['f1'][$j]} size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
	}
?>

<script type="text/javascript">

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
xmlhttp.open("GET","edit.php?edit=work&id="+id+"&feild="+field+"&value="+value,true);
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
xmlhttp.open("GET","edit.php?edit=menu&id="+id+"&feild=status&value="+newval,true);
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