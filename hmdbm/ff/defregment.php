<?php 
include "common.php";
$cp=1001;
$bp=1;
while($cp<1100){
$sq1=sql_query("select id from cookie_id where status=1&&id>{$cp} order by id");
$row1=mysql_fetch_array($sq1);

$sq3=sql_query("select id from cookie_id where status=1&&id>{$row1[0]} order by id");
$row2=mysql_fetch_array($sq3);
$cp=$row1[0];
$a=$row1[0];
$b=$row2[0];

echo "{$a}--{$b}<br>";	
sql_query("update cookie_id set id=445 where id={$a}");sql_query("update cookie_id set id={$a} where id={$b}");sql_query("update cookie_id set id={$b} where id=445");
}

$sq2=sql_query("select * from cookie_id order by id");



while($row=mysql_fetch_array($sq2)){
	if($row['status']=="0"){
	
		$sq1=sql_query("select id from cookie_id where status=1&&id>{$row['id']} order by id");
		if($row['id']>1100){
			break;
		}
		if(mysql_num_rows($sq1)>0){
			$row1=mysql_fetch_array($sq1);
			$a=$row['id'];
			$b=$row1[0];
			$cp=$b;
			//sql_query("update cookie_id set id=445 where id={$a}");sql_query("update cookie_id set id={$a} where id={$b}");sql_query("update cookie_id set id={$b} where id=445");
			//echo "{$row['id']}--{$row1[0]}<br>";
		}
		
	}
}

//sql_query("update cookie_id set id=445 where id={$a}");sql_query("update cookie_id set id={$a} where id={$b}");sql_query("update cookie_id set id={$b} where id=445");

?>