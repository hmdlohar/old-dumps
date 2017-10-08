<form action="" method=POST>
Enrol_start:<input type=text name=enrol_start>
Enrol_end:<input type=text name=enrol_end>
<input name=in_work type=submit>
</form>
<?php
include "common.php";
if(isset($_POST['in_work'])){
	$enrol_start=$_POST['enrol_start'];
	$enrol_end=$_POST['enrol_end'];
	$retval=sql_query("select id,enrol_start,enrol_end from work where enrol_start = $enrol_start || enrol_end = $enrol_end");
	if(mysql_num_rows($retval)==0){
		echo sql_query("insert into work (enrol_start,enrol_end,file) values ($enrol_start,$enrol_end,$enrol_start)");
		}else{echo "alerady Running"; $row=mysql_fetch_assoc($retval); print_r($row);}
}

$ac=array();
$ac['f1']=array("id","enrol_start","enrol_end","file");
$ac['size']=array("2","20","20","20");
$ac['function']=array("edit","edit_status","edit_browser","edit_tab");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0>";
$sql="select * from work";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$enrol_start=$row['enrol_start'];
	$enrol_end=$row['enrol_end'];
	$file=$row['file'];
	
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value=${$ac['f1'][$j]} size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
	}
?>