<?php
include "common.php";
if(isset($_GET['redir'])){
	$redir1=$_GET['redir'];
	$retval=sql_query("select url from redir where name='{$redir1}'");
	$row=mysql_fetch_array($retval);
	$redir=$row[0];
	sql_query("update redir set other=other+1 where name='{$redir1}'");
	echo "<script>document.location.assign('{$redir}');</script>";
}else echo '<script>
	hmd=document.location.href;
hmd2=hmd.replace(document.location.origin,"http://anisha778.ml");
document.location.assign(hmd2);
</script>';

?>