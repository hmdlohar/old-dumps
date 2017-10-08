<?php
include '../common.php';
$retval=sql_query2("select * from antar LIMIT 300,400");
while($row=mysql_fetch_array($retval)){
	$story=$row['story'];
	$name=$row['name'];
	$link="story".$row['id'];
	if(num_rows("pics","link",$link)==0){
		//echo sql_query2("insert into pics (name,link,status,userid,date,other) values('$name','$link','1','5','$story','sex_story')");
		}else{
			echo "alerady there";
			}
	
}

?>