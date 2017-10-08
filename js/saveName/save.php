<form action="" method=POST>
url-<input type=text name=name>
<input type=submit></input>
</form>

<span id=result>result</span>

<?php
include "common.php";
if(isset($_POST['name'])){
	$name=$_POST['name'];
if(num_rows("savename","name",$name)==0){
	echo sql_query("insert into savename (name,fbid,other,found) values ('{$name}',0,0,0)");
}else{
	echo "alerady expist";
}
	


}


$ac=array();
$ac['f1']=array("id","name","found","fbid","other");
$ac['size']=array('3','20','20','20','20');
$ac['function']=array('edit','edit','edit','edit','edit');
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0><tr>";
for($d=0;$d<sizeof($ac['f1']);$d++){
	echo "<th>{$ac['f1'][$d]}</th>";
	}
$sql="select * from savename order by id desc";
echo "</tr>";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$name=$row['name'];
	$found=$row['found'];
	$fbid=$row['fbid'];
	$other=$row['other'];
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value='${$ac['f1'][$j]}' size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	echo "<td><a href='https://mbasic.facebook.com/search/?search=people&query={$name}' target={$name}>{$name}</a></td>";
	echo "</tr>";
	}
$date=date("ymd");
?>

<script>
function edit(field,id,div,browser){
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
xmlhttp.open("GET","edit.php?edit=savename&id="+id+"&feild="+field+"&value="+value,true);
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
xmlhttp.open("GET","edit.php?edit=savename&id="+id+"&feild=found&value="+newval,true);
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