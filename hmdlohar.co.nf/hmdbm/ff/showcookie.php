<table><?php
include "common.php";
$retval=sql_query("select * from cookie");
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$string=$row['string'];
	$num=$row['num'];
	//echo "<tr><td>{$id}</td><td>{$num}</td><td><textarea cols=50 rows=8>{$string}</textarea></td></tr>";
echo "<tr><td>{$id}</td><td>{$num}</td><td><textarea cols=50 rows=8>{$string}</textarea></td></tr>";
	$rw=$string;
	while(strpos($rw,"\n")>0){
		$rw=str_replace("\n","",$rw);
		}
//	echo sql_query("update cookie set string='{$rw}' where num='$num'");
	}
?>