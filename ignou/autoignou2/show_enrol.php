<?php
include "common.php";
$ac=array();
$ac['f1']=array("id","enrol_no","name","mobile");
$ac['size']=array("2","20","20","20");
$ac['function']=array("edit","edit_status","edit_browser","edit_tab");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0>";
$sql="select * from enrol order by enrol_no";
$retval=sql_query($sql);

$enrol=array();
$id=array();
$x=0;
while($row=mysql_fetch_array($retval)){
	$enrol[$x]=$row['enrol_no'];
	$id[$x]=$row['id'];
	$x++;

	}
for($x=0;$x<sizeof($enrol);$x++){

		$now=floor((int)$enrol[$x] / 10);
		$past=floor((int)$enrol[$x-1] / 10);
	if($now-$past!=1){
		echo $past-$now;}
	echo "  --  {$id[$x]} --> {$enrol[$x]}<br>";
}
?>