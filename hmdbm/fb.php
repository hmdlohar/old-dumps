<form action="" method=POST>
Name:-<input type=text name=page_name>
Page_id:-<input type=text name=page_id>
<input type=submit name=in_fb>
</form><table border=1 cellspacing=0>
	<tr><td>ID</td><td>name</td><td>FBID</td><td>I-chrome</td><td>I-Firefox</td><td>Mbasic</td><td>WWW</td><td>Likes</td></tr>
<?php
include "common.php";
if(isset($_POST['in_fb'])){
	$page_name=$_POST['page_name'];
	$page_id=$_POST['page_id'];
	if(num_rows("hmdbm","link",$page_id)==0){
		echo sql_query("insert into hmdbm (name,link,hit,other) values ('$page_name','$page_id','fb','')");
		}else{echo "alerady inserted";}
	
}
$retval=sql_query("select * from hmdbm where hit='fb'");
while($row=mysql_fetch_array($retval)){
	$page_name=$row['name'];
	$page_id=$row['link'];
	$id=$row['id'];
	echo "<tr><td>{$id}</td><td><a href='https://mbasic.facebook.com/{$page_id}' target=new{$id}>{$page_name}</a></td><td>{$page_id}</td><td><a href='https://m.facebook.com/send_page_invite/?pageid={$page_id}' target=new{$id}>I-chrome</a></td>
	
	<td><a href='https://x.facebook.com/send_page_invite/?pageid={$page_id}' target=new{$id}>I-Firefox</a></td>
	<td><a href='https://mbasic.facebook.com/{$page_id}' target=new{$id}>Mbasic</a></td>
	<td><a href='https://www.facebook.com/{$page_id}' target=new{$id}>WWW</a></td>
	<td></td>
	<td><a href='in_bm.php?delete={$id}'>DELETE</a></td>
	
	</tr>";
}
?>