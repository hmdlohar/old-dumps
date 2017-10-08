<?php
include "common.php";
if(isset($_GET['only_id'])){
$retval=sql_query("select * from log where comment!='used' limit 1");
$row=mysql_fetch_array($retval);
echo $row[0];
}
if(isset($_GET['full_info'])){
$retval=sql_query("select * from log where comment!='used' limit 1");
$row=mysql_fetch_array($retval);
echo $row[0]."-hmd-".$row['username']."-hmd-".$row['pass'];
}
?>