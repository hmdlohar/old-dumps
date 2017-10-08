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
	<tr><td>name</td><td>mm</td><td>link</td><td>ind</td><td>ind</td><td>type</td><td>status</td></tr>
<?php
if(isset($_POST['in_pics'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$date=$_POST['date'];
	$mm=$_POST['mm'];
	$ind=$_POST['ind'];
	//$type=$_POST['type'];
	$sql="insert into post (name,link,date,mm,ind,status)values('$name','$link','$date','$mm','$ind',1)";
	sql_query($sql);
}

$ac=array();
$ac['f1']=array("name","mm","link","ind","status");
$ac['size']=array("50","10","10","1","1");
$ac['function']=array("edit","edit_status","edit_browser","edit_tab","edit_status");
$acf1=sizeof($ac['f1']);
echo "<table border=1 cellspacing=0>";
$sql="select * from post";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$id=$row['id'];
	$name=$row['name'];
	$link=$row['link'];
	$status=$row['status'];
	$mm=$row['mm'];
	$ind=$row['ind'];
	echo "<tr>";
	for($j=0;$j<$acf1;$j++){
		echo "<td><input type=text value='${$ac['f1'][$j]}' size={$ac['size'][$j]} id={$ac['f1'][$j]}{$id}><span onclick={$ac['function'][$j]}('{$ac['f1'][$j]}',{$id},'{$ac['f1'][$j]}{$id}')>ED</span></td>";
		}echo "<td><span onclick=del({$id})>DEL</span></td>";
	
	echo "</tr>";
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