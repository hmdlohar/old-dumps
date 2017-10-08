<?php 
include "common.php";
if(isset($_GET['login'])){
	$username=$_GET['username'];
	$mobile=$_GET['mobile'];
	$devId=$_GET['devId'];
	$totalmatch=$_GET['totalmatch'];
	$date = date("Ymd");
	$sql=sql_query("select deviceId from user where deviceId='{$devId}'");
	if(mysql_num_rows($sql)>=1){
		$sql2=sql_query("select * from user where deviceId='{$devId}'");
		$row=mysql_fetch_array($sql2);
		if($row['username']==$username){
			echo "userMatch-hmd-{$mobile}-hmd-{$row['status']}-hmd-{$date}-hmd-{$row['totalmatch']}-hmd-{$row['paid']}-hmd-{$row['datejoin']}";
			sql_query("update user set datelogin={$date} where deviceId='{$devId}'");
		}
		else{
			echo "userNotMatch";
			return;
		}
		if($mobile!=$row['mobile']){
			sql_query("update user set mobile={$mobile} where deviceId='{$devId}'");
		}
	}
	else{
		$sql3=sql_query("select username from user where username='{$username}'");
		if(mysql_num_rows($sql3)>=1){
			echo "userMissMatch";
		}
		else{
			sql_query("insert into user (username,mobile,deviceId,datejoin,datelogin,status,totalmatch,paid,name,email,expiredate) values ('{$username}',{$mobile},'{$devId}',{$date},{$date},1,0,0,0,0,0)");
			echo  "userInserted";
		}
		
		
	}
}


?>
<script>

</script>