<?php
include "common.php";
$ac=array();
$ac['f1']=array("id","enrol_no","name","mobile");
$ac['size']=array("2","20","20","20");
$ac['function']=array("edit","edit_status","edit_browser","edit_tab");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0>";
$sql="select * from enrol";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$enrol_no=$row['enrol_no'];
	$name=$row['name'];
	$mobile=$row['mobile'];
	
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value=${$ac['f1'][$j]} size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
	}

?>