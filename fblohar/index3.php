<span id=result>result</span>
<?php
include "common.php";
?>
</table></td><td>
<table border=1 cellspacing=0>
<tr><th>TAB</th><TH>ID</TH><th>email</th><td>STATUS</td></tr>
<?php
$retval=sql_query("select * from ac where firefox!=0&&status=1&&firefox>899 order by firefox");
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$email=$row['email'];
	$status=$row['status'];
	$chrome=$row['firefox'];

	echo "<tr><td>{$chrome}</td><td>{$id}</td><td><input type=text id=email{$id} value={$email} size=30></td><td><input type=text id=status{$id} value={$status} size=2><span onclick=edit_status('status','{$id}','status{$id}')>ED</span></td><td><input type=text id=move{$id} size=4> <span onclick=move_request('{$id}','move{$id}')>MV</span></td></tr>";
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
function move_request(id,div){
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
xmlhttp.open("GET","edit.php?move="+id+"&newtab="+value,true);
xmlhttp.send();
}



</script>
