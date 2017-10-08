<?php
include '../common.php';
$date=date("ymd");
$mm=mm_list();
$ind= max_index();
?>

<form action="" method=POST>
name:<input type=text name=name id=name>
link:<input type=text name=link id=link>
mm:<select name=mm><?php for($x=0;$x<=sizeof($mm);$x++){echo "<option value={$mm['link'][$x]}>{$mm['name'][$x]}</option>";} ?></select>
type:<select name=type><option value=post>POST</option><option value=page>PAGE</option></select>
date:<input type=text name=date id=date size=5 value=<?php echo $date; ?>>
index:<input type=text name=ind id=ind size=2 value=<?php echo $ind; ?>>


<input type=submit name=in_pics>
</form>
<p id=result style="position:fixed;top:20px;right:20px">result</p>
<table>
	<tr><td>name</td><td>link</td><td>mm</td><td>date</td><td>ind</td><td>type</td><td>status</td></tr>
<?php
if(isset($_POST['in_pics'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$date=$_POST['date'];
	$mm=$_POST['mm'];
	$ind=$_POST['ind'];
	$type=$_POST['type'];
	$sql="insert into post (name,link,date,mm,ind,type,status)values('$name','$link','$date','$mm','$ind','$type',1)";
	sql_query($sql);
}

$sql="select * from post";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$date=$row['date'];
	$mm=$row['mm'];
	$ind=$row['ind'];
	$id=$row['id'];
	$status=$row['status'];
	$type=$row['type'];
	//$name=$row['name'];
	echo "<tr><td>{$id}<input type=text id=name{$id} value='{$name}' size=15><span onclick=edit('name','name{$id}',{$id})>ED</span></td>
	<td><input type=text id=link{$id} value='{$link}' size=15><span onclick=edit('link','link{$id}',{$id})>ED</span></td>
	<td><input type=text id=mm{$id} value='{$mm}' size=5><span onclick=edit('mm','mm{$id}',{$id})>ED</span></td>
	<td><input type=text id=date{$id} value='{$date}' size=2><span onclick=edit('date','date{$id}',{$id})>ED</span></td>
	<td><input type=text id=ind{$id} value='{$ind}' size=2><span onclick=edit('ind','ind{$id}',{$id})>ED</span></td>
	<td><input type=text id=type{$id} value='{$type}' size=2><span onclick=edit('type','type{$id}',{$id})>ED</span></td>
	<td><input type=text id=status{$id} value='{$status}' size=2><span onclick=edit_status('status','status{$id}',{$id})>ED</span></td>
	<td><span onclick=del({$id})>DEL</span>--<a href=edit_pics.php?other2={$id} target=new{$id}>Other2</a></td>
	</tr>";
}
?>

<script>
function edit(name,div,id){
	value=document.getElementById(div).value;
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit_pics.php?edit_pics="+name+"&id="+id+"&value="+value,true);
xmlhttp.send();
}
function edit_status(name,div,id){
	value=document.getElementById(div).value;
	if(value==1){value=0;}else{value=1}
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit_pics.php?edit_pics="+name+"&id="+id+"&value="+value,true);
xmlhttp.send();
}
function del(id){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","edit_pics.php?del_pics="+id,true);
xmlhttp.send();
}
</script>