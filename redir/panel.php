<form action="" method=GET>
Link:-<input type=text name=s value=http://>
<?php echo "http://{$_SERVER['HTTP_HOST']}/?redir="; ?><input type=text name=d>
<input type=submit name=in_redir>
</form>

<?php 
include "common.php";
if(isset($_GET['in_redir'])){
	$s=$_GET['s'];
	$d=$_GET['d'];
	if(num_rows("redir","name",$d)==0){
		echo sql_query("insert into redir (url,name) values ('{$s}','{$d}')");
		}else{echo "alerady exist";}

}
echo "<table border=0>";
echo "<tr><th>ID</th><th>link</th><th>Destination link</th><th>Hits</th></tr>";
$retval=sql_query("select * from redir order by id desc");
while($row=mysql_fetch_array($retval)){
	$url=$row['url'];
	$id=$row['id'];
	$name=$row['name'];
	$other=$row['other'];
	echo "<tr><td>{$id}</td><td>http://{$_SERVER['HTTP_HOST']}/?redir={$name} --> </td><td> {$url}</td><td>{$other}</td></tr>";
}


?>