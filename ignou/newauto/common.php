<?php
include "db.php";
function sql_query($query){
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}
function in_sql($query2,$query){
	$retval=sql_query($query2);
	$num=mysql_num_rows($retval);
	if($num==0){
		sql_query($query);
		return 1;
	}else{
		echo "already inserted";
		return 0;
	}
}
function file_get($id){
	$row=mysql_fetch_array(sql_query("select file from work where id='$id'"));
	return $row[0];
}
function file_post($id,$value){
	return sql_query("update work set file='$value' where id='$id'");
}
function get_enrol($enrol){
$cSession = curl_init();
$post_data = "EnrNo={$enrol}&program=MCA&Submit=submit";
//step2
curl_setopt($cSession,CURLOPT_URL,"http://admission.ignou.ac.in/changeadmdata/AddressStatus.asp");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

return $result;
}

?>