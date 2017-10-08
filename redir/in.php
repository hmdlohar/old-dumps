<form action="" method=GET>
<input type=text name=s value=http://>
<input type=text name=d>
<input type=submit name=in_redir>
</form>

<?php 
if(isset($_GET['in_redir'])){
	$s=$_GET['s'];
	$d=$_GET['d'];
	$file=fopen("{$d}.html","w+");
	fwrite($file,'<script type=text/javascript>document.location.assign("'.$s.'");</script>');
	fclose($file);
	
	$file=fopen("log.html","a+");
	fwrite($file,"{$d}=<a href={$s}>{$s}</a><br>");
	fclose($file);
}



?>