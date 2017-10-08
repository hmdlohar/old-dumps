<?php
include "common.php";
if(isset($_POST['in_ebook'])){
	$email=$_POST['email'];
	$mobile_number=$_POST['mobile_number'];
	$retval=sql_query("insert into ebook (email,mobile_number) values('$email','$mobile_number')");
	if($retval==1){
		echo "Your Request has been received it will be processed soon.";
		}else{echo "error";}
	}

?>
