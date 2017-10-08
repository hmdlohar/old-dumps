<form action="" method="POST">
Email:<input type=text name=email>

pass:<select name=password><option value=normal>Normal</option><option value=hmd>Hmd</option><option value=xp>XP</option><option value=other>Other</option></select>
Firefx:<input type=text name=firefox size=2 value=0>
chrome:<input type=text name=chrome size=2 value=0>
chr:<input type=text name=chr size=2 value=0>
States:<select name=status style="width:50px;"><option value=1>FbRunning</option><option value=0>FbNotRunning</option><option value=2>FullNotrunning</option><option value=3>Gmail Running</option></select>
Notes:<input type=text name=notes value=0>
<input type=submit name=add><span id=result>result</span>
</form>

<?php
include "common.php";
if(isset($_POST['add'])){
$email=$_POST['email'];	
$password=$_POST['password'];	
$firefox=$_POST['firefox'];	
$chrome=$_POST['chrome'];	
$chr=$_POST['chr'];	
$status=$_POST['status'];	
$notes=$_POST['notes'];	
if(num_rows("ac","email",$email)==0){
	echo sql_query("insert into ac (email,password,firefox,chrome,chr,status,notes)values('$email','$password','$firefox','$chrome','$chr','$status','$notes')");
	}else{echo "already in";}

}
$ac=array();
$ac['f1']=array("id","email","status","firefox","chrome","chr","notes");
$ac['size']=array("5","50","1","1","1","1","30");
$ac['function']=array("edit","edit","edit_status","edit","edit","edit","edit");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0><tr>";
for($d=0;$d<sizeof($ac['f1']);$d++){
	echo "<th>{$ac['f1'][$d]}</th>";
	}
$sql="select * from ac";
echo "</tr>";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$email=$row['email'];
	$status=$row['status'];
	$firefox=$row['firefox'];
	$chrome=$row['chrome'];
	$chr=$row['chr'];
	$notes=$row['notes'];

	
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
xmlhttp.open("GET","edit.php?edit=ac&id="+id+"&feild="+field+"&value="+value,true);
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