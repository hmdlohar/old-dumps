<?php
include 'db2.php';
if(isset($_GET['enrol'])){
	$enrol = $_GET['enrol'];
	$data=$_GET['data'];
	$data_array=explode(",",$data);
	$sql="SELECT enrol FROM ig WHERE enrol='$data_array[5]'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$count1=mysql_num_rows($retval);
	if($count1 == 0){
$sql="INSERT INTO ig (add_year,address,birth,cource,email,enrol,father,mobile,name,regnal,study_center,till_year) VALUES ('$data_array[0]','$data_array[1]','$data_array[2]','$data_array[3]','$data_array[4]','$data_array[5]','$data_array[6]','$data_array[7]','$data_array[8]','$data_array[9]','$data_array[10]','$data_array[11]')";
			mysql_select_db($dbname);
			$retval = mysql_query($sql,$conn);
			if(!$retval){echo mysql_error();} else {echo "{$data_array[5]} done.";}
		} else {echo "{$data_array[5]} already used";}
	}

?>