<?php
include "../common.php";
if(isset($_POST['in_updats'])){
$name=$_POST['name'];
$link=$_POST['link'];
$perent=$_POST['perent'];
$date=$_POST['date'];
$u_link=$_POST['u_link'];
$degree=$_POST['degree'];
$cat=$_POST['cat'];
if(num_rows("menu","link",$link)==0){
	echo sql_query("insert into updats (name,link,perent,date,u_link,cat,sort) values ('$name','$link','$perent','$date','$u_link','$cat',50)");
	}else{echo "link already in";}
}
if(isset($_POST['in_updats_link'])){
$link=$_POST['link'];
$row=mysql_fetch_array(sql_query("select * from menu where link='$link'"));
$name=$row['name'];
$link=$row['link'];
$perent=$row['perent'];
$date=$row['date'];
$u_link=$row['u_link'];
$degree=$row['degree'];
$cat=$row['cat'];
if(num_rows("updats","link",$link)==0){
	echo sql_query("insert into updats (name,link,perent,date,u_link,cat,sort) values ('$name','$link','$perent','$date','$u_link','$cat',50)");
	}else{echo "link already in";}
}
?>
<form action="" method="POST">
Name:<input type=text name=name>
link:<input type=text name=link>
perent:<select name=perent>
<?php
$retval=sql_query("select name,link from menu where perent='music'|| perent='videos' || perent='full_movie' order by perent");
while($row=mysql_fetch_array($retval)){
	echo "<option value={$row['link']}>{$row['name']}</option>";
	}
?>
</select>
Date:<input type=text name=date value=<?php echo date("ymd"); ?>>
U_Link:<input type=text name=u_link>
Degree:<select name=degree>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
</select>
Cat:<select name=cat>
<option value=obj>obj</option>
<option value=menu>menu</option>
</select>
<input type=submit name=in_menu>
</form>
<form action="" method=POST>
<input type=text name=link>
<input type=submit name=in_updats_link>
</form>