<form action="" method=POST>
<input type=text name=name id=name>
<input type=text name=link id=link  onfocusout=link2name()>
<input type=text name=total id=total size=2>

<input type=submit name=in_pics>
</form>
<p id=result style="position:fixed;top:20px;right:20px">result</p>
<p id=result style="position:fixed;top:30px;right:20px" onclick=all_same()>all_same</p>
<table>
<?php
include '../common.php';
include "../files/db.php";
if(isset($_POST['in_pics'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$total=$_POST['total'];
	in_pics($name,$link,$total,1,"http://emwpa3.tk/pics");
}
if(isset($_GET['sort'])){
	$sort=$_GET['sort'];
	}else{$sort="id";}
$sql="select * from pics order by $sort desc";
$retval=sql_query($sql);
while($row=mysql_fetch_array($retval)){
	$name=$row['name'];
	$link=$row['link'];
	$total=$row['total'];
	$status=$row['status'];
	$url=$row['url'];
	$userid=$row['userid'];
	$other=$row['other'];
	$id=$row['id'];
	echo "<tr><td>{$id}<input type=text id=name{$id} value='{$name}' size=15><span onclick=edit('name','name{$id}',{$id})>ED</span></td><td><input type=text id=link{$id} value='{$link}' size=15><span onclick=edit('link','link{$id}',{$id})>ED</span></td><td><input type=text id=total{$id} value='{$total}' size=2><span onclick=edit('total','total{$id}',{$id})>ED</span></td>
	<td><input type=text id=url{$id} value='{$url}' size=15><span onclick=edit('url','url{$id}',{$id})>ED</span></td>
	<td><input type=text id=other{$id} value='{$other}' size=5><span onclick=edit('other','other{$id}',{$id})>ED</span></td>
	<td><input type=text id=userid{$id} value='{$userid}' size=2><span onclick=edit('userid','userid{$id}',{$id})>ED</span></td>
	<td><input type=text id=status{$id} value='{$status}' size=2><span onclick=edit_status('status','status{$id}',{$id})>ED</span></td>
	<td><span onclick=del({$id})>DEL</span></td>
	</tr>";
	}
?>
</table>
<script>
function link2name(){
	hmd=document.getElementById('link').value;
	hmd2=hmd.split("-")[0][0].toUpperCase()+""+hmd.split("-")[0].substring(1)+" "+hmd.split("-")[1][0].toUpperCase()+""+hmd.split("-")[1].substring(1);
	document.getElementById('name').value=hmd2;
}
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
function all_same(){
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
xmlhttp.open("GET","edit_pics.php?all_same=do",true);
xmlhttp.send();
}
</script>