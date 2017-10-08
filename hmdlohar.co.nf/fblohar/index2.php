<span id=result>result</span>
<?php

include "common.php";
	$retval=sql_query("select status from ac where id=13");
	$row=mysql_fetch_array($retval);
	$runningNow=$row[0];
	echo "<span id=runningNow>{$row[0]}</span>";
	$totalFrnds=1;
?>
<table border=0 cellpadding=5>
	<tr><td>
<table border=1 cellspacing=0>
<tr><th>TAB</th><TH>ID</TH><th>email</th><td>STATUS</td><td>Notes</td><td>MOVE</td></tr>
<?php
$retval=sql_query("select * from ac where firefox!=0&&status=1&&firefox<900 order by firefox");
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$email=$row['email'];
	$status=$row['status'];
	$firefox=$row['firefox'];
	$notes=$row['notes'];
	$other1=$row['other1'];
	$other2=$row['other2'];
	$totalFrnds+=$other2;

	echo "<tr><td>{$firefox}</td><td>{$id}</td><td><input type=text id=email{$id} value={$email} size=30></td><td><input type=text id=status{$id} value={$status} size=2><span onclick=edit_status('status','{$id}','status{$id}')>ED</span></td><td><input type=text id=notes{$id} value={$notes} size=15><span onclick=edit('notes','{$id}','notes{$id}')>ED</span></td><td><input type=text id=move{$id} size=4> <span onclick=move_request('{$id}','move{$id}')>MV</span></td><td>{$other1}</td><td>{$other2}</td></tr>";
}
?>

</table></td><td>
<table border=1 cellspacing=0>
<tr><th>TAB</th><TH>ID</TH><th>email</th><td>STATUS</td></tr>
<tr><th>TF=</th><TH><?php echo $totalFrnds; ?></TH><th><?php echo $runningNow; ?></th><td>STATUS</td></tr>
<?php
$retval=sql_query("select * from ac where chrome!=0&&status=1 order by chrome");
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$email=$row['email'];
	$status=$row['status'];
	$chrome=$row['chrome'];

	echo "<tr><td>{$chrome}</td><td>{$id}</td><td><input type=text id=email{$id} value={$email} size=30></td><td><input type=text id=status{$id} value={$status} size=2><span onclick=edit_status('status','{$id}','status{$id}')>ED</span></td></tr>";
}
?>

</table></td><td>
<table border=1 cellspacing=0>
<tr><th>TAB</th><TH>ID</TH><th>email</th><td>STATUS</td></tr>
<?php
$retval=sql_query("select * from ac where chr!=0&&status=1 order by chr");
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$email=$row['email'];
	$status=$row['status'];
	$chr=$row['chr'];

	echo "<tr><td>{$chr}</td><td>{$id}</td><td><input type=text id=email{$id} value={$email} size=30></td><td><input type=text id=status{$id} value={$status} size=2><span onclick=edit_status('status','{$id}','status{$id}')>MV</span></td></tr>";
}
?>
</table></td>


</tr>
</table>

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
