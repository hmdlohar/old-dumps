<?php
if(isset($_GET['in_redir'])){
	$string=$_GET['in_redir'];
	$file=fopen("redirs.html","w+");
	fwrite($file,$string);
}else{
	$file=fopen("redirs.html","r+");
	$str=fgets($file);
	echo "<form action='' method=GET>
	<input type=text name=in_redir size=80 value='{$str}'>
	<input type=submit>
	</form>";
}
?>