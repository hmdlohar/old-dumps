<?php

include "../common.php";
?>
<html>
<form action="" method=POST>
Name:<input type=text name=in_name id=in_name>
Link:<input type=text name=in_link id=in_link>
Perent:<select name=in_perent style="width:150px;">
	<option value=index>ind</option>
	<?php
	$retval=sql_query("select * from menu");
	while($row=mysql_fetch_array($retval)){
		echo "<option value={$row['link']}>{$row['name']}</option>";
		echo"is ist runng";
		}
	?>
</select>
<select name=in_cat>
	<option value=obj>OBJ</option>
	<option value=menu>Menu</option>
</select>
<input type=submit name=in_menu>
</form>
</html>
<?php

if(isset($_POST['in_menu'])){
	$name=$_POST['in_name'];
	$link=$_POST['in_link'];
	$perent=$_POST['in_perent'];
	$cat=$_POST['in_cat'];
	$date=date("ymd");
	$time=date("His");
	echo date("His");
	if(num_rows("menu","link","$link")==0){
	sql_query("insert into menu (name,link,perent,date,time,cat) values ('$name','$link','$perent','$date','$time','$cat')");
	}else{echo "link already used";}

}


?>
<script>
	setInterval("update_link()",300);
function update_link(){
	in_name=document.getElementById("in_name").value;
	in_link=document.getElementById("in_link");
	in_final=in_name;
	while(in_final.indexOf(" ")>0){
		in_final=in_final.replace(" ","_");
		}
	in_link.value=in_final;
}
</script>