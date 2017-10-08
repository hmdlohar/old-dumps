

<span id=result>result</span>
<?php
include "common.php";
?>
<table border=0 cellpadding=5>
	<tr><td>
<table border=1 cellspacing=0>

<?php

//for($x=1;$x<=40;$x++){echo "#tab{$x} = #row['tab{$x}'];";}


$ac=array();
$ac['f1']=array('otherl','tab5','tab6','tab7','tab8','tab9','tab10','tab11','tab12','tab13','tab14','tab15','tab16','tab17','tab18','tab19','tab20','tab21','tab22','tab23','tab24','tab25','tab26','tab27','tab28','tab29','tab30','tab31','tab32','tab33','tab34','tab35','tab36','tab37','tab38','tab39','tab40','tab41','tab42','tab43','tab44','tab45','tab46','tab47','tab48','tab49','tab50');
$ac['size']=array('8','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2','2');
$ac['function']=array('edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit','edit');
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0><tr>";
for($d=0;$d<sizeof($ac['f1']);$d++){
	echo "<th>{$ac['f1'][$d]}</th>";
	}
$sql="select * from firefox  order by otherl desc limit 15";
echo "</tr>";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
$tab1 = $row['tab1'];$tab2 = $row['tab2'];$tab3 = $row['tab3'];$tab4 = $row['tab4'];$tab5 = $row['tab5'];$tab6 = $row['tab6'];$tab7 = $row['tab7'];$tab8 = $row['tab8'];$tab9 = $row['tab9'];$tab10 = $row['tab10'];$tab11 = $row['tab11'];$tab12 = $row['tab12'];$tab13 = $row['tab13'];$tab14 = $row['tab14'];$tab15 = $row['tab15'];$tab16 = $row['tab16'];$tab17 = $row['tab17'];$tab18 = $row['tab18'];$tab19 = $row['tab19'];$tab20 = $row['tab20'];$tab21 = $row['tab21'];$tab22 = $row['tab22'];$tab23 = $row['tab23'];$tab24 = $row['tab24'];$tab25 = $row['tab25'];$tab26 = $row['tab26'];$tab27 = $row['tab27'];$tab28 = $row['tab28'];$tab29 = $row['tab29'];$tab30 = $row['tab30'];$tab31 = $row['tab31'];$tab32 = $row['tab32'];$tab33 = $row['tab33'];$tab34 = $row['tab34'];$tab35 = $row['tab35'];$tab36 = $row['tab36'];$tab37 = $row['tab37'];$tab38 = $row['tab38'];
$tab39 = $row['tab39'];$tab40 = $row['tab40'];	
$tab41=$row['tab41'];$tab42=$row['tab42'];$tab43=$row['tab43'];$tab44=$row['tab44'];$tab45=$row['tab45'];$tab46=$row['tab46'];$tab47=$row['tab47'];$tab48=$row['tab48'];$tab49=$row['tab49'];$tab50=$row['tab50'];


	$otherl=$row['otherl'];
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value=${$ac['f1'][$j]} size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}','firefox')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
	}
$date=date("ymd");
echo "<a href='?add_today={$date}'>add today</a>";
if(isset($_GET['add_today'])){
	$date=$_GET['add_today'];
	if(num_rows("firefox","otherl",$date)==0){echo sql_query("insert into firefox (otherl,tab1,tab2,tab3,tab4,tab5,tab6,tab7,tab8,tab9,tab10,tab11,tab12,tab13,tab14,tab15,tab16,tab17,tab18,tab19,tab20,tab21,tab22,tab23,tab24,tab25,tab26,tab27,tab28,tab29,tab30,tab31,tab32,tab33,tab34,tab35,tab36,tab37,tab38,tab39,tab40,tab41,tab42,tab43,tab44,tab45,tab46,tab47,tab48,tab49,tab50) values ('$date','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-')");}else{echo "alerady in";}
		//~ if(num_rows("chrome","otherl",$date)==0){echo sql_query("insert into chrome (otherl,tab1,tab2,tab3,tab4,tab5,tab6,tab7,tab8,tab9,tab10,tab11,tab12,tab13,tab14,tab15,tab16,tab17,tab18,tab19,tab20,tab21,tab22,tab23,tab24,tab25,tab26,tab27,tab28,tab29,tab30,tab31,tab32,tab33,tab34,tab35,tab36,tab37,tab38,tab39,tab40) values ('$date','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-')");}else{echo "alerady in";}
			//~ if(num_rows("chr","otherl",$date)==0){echo sql_query("insert into chr (otherl,tab1,tab2,tab3,tab4,tab5,tab6,tab7,tab8,tab9,tab10,tab11,tab12,tab13,tab14,tab15,tab16,tab17,tab18,tab19,tab20,tab21,tab22,tab23,tab24,tab25,tab26,tab27,tab28,tab29,tab30,tab31,tab32,tab33,tab34,tab35,tab36,tab37,tab38,tab39,tab40) values ('$date','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-')");}else{echo "alerady in";}
}
?>
</tr>


</table></td></tr>
</table></td>


</tr>
</table>


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
xmlhttp.open("GET","edit.php?edit="+browser+"&id="+id+"&feild="+field+"&value="+value,true);
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