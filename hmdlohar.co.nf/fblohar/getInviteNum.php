hello hw r u

<?php 
include "common.php";
echo "asf";
if(isset($_GET['num'])){
	$num=$_GET['num'];
	$target=((($num-1)/5)+11);
	$targetStr="tab{$target}";
	echo $target;
	echo $targetStr;
	$retval=sql_query("select {$targetStr} from firefox limit 1");
	while($row=mysql_fetch_array($retval)){
		echo $row[0];
	}
}
?>
