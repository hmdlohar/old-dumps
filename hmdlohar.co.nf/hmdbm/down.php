<?php
include 'db.php';
?>

<a href=index.php>HMDBM</a>

<form action="" method=POST>
Name:- <input type=text name=name> Link:- <input type=text name=link> Comment1:- <input type=text name=comment1>Comment2:- <input type=text name=comment2> <input type=submit name=down_in>
</form>
<p id=result>Result</p>
<table cellspacing=0 border=1>

<?php
if(isset($_POST['down_in'])){
	$name=$_POST['name'];
	$link=$_POST['link'];
	$comment1=$_POST['comment1'];
	$comment2=$_POST['comment2'];
	$date_in=date("ymd");
	$sql="INSERT INTO down (name,link,comment1,comment2,date_in)VALUES('$name','$link','$comment1','$comment2','$date_in')";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	if(!$retval){echo mysql_error();}else{echo "Sucessful";}
}
$sql="SELECT * FROM down";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		$name=$row['name'];
		$id=$row['id'];
		$link=$row['link'];
		$comment1=$row['comment1'];
		$comment2=$row['comment2'];
		$date_in=$row['date_in'];
		$date_out=$row['date_out'];
		$status=$row['status'];
		echo "<tr>
		<td><input id=name{$id} type=text size=15 value='{$name}'>:<span id=edit onclick=edit('name{$id}',{$id},'name')>ED</span></td>
		<td><input id=link{$id} type=text size=15 value='{$link}'>:<span id=edit onclick=edit('link{$id}',{$id},'link')>ED</span></td>
		<td><input id=comment1{$id} type=text size=15 value='{$comment1}'>:<span id=edit onclick=edit('comment1{$id}',{$id},'comment1')>ED</span></td>
		<td><input id=comment2{$id} type=text size=15 value='{$comment2}'>:<span id=edit onclick=edit('comment2{$id}',{$id},'comment2')>ED</span></td>
		<td><input id=status{$id} type=text size=2 value='{$status}'>:<span id=edit onclick=edit('status{$id}',{$id},'status')>ED</span></td>
		<td>{$date_in} </td>
		<td>{$date_out}</td>
		<td><span id=del onclick=done('{$id}')>DONE</span></td>
		<td><span id=del onclick=del('{$id}')>DEL</span></td>
		</tr>";
		}


?>

<script>
function edit(div_id,db_id,feild_id){
	value= document.getElementById(div_id).value;
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
xmlhttp.open("GET","edit_down.php?edit=edit&db_id="+db_id+"&feild_id="+feild_id+"&value="+value,true);
xmlhttp.send();	
}
function del(db_id){

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
xmlhttp.open("GET","edit_down.php?del=del&db_id="+db_id,true);
xmlhttp.send();	
}
function done(db_id){

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
xmlhttp.open("GET","edit_down.php?done=edit&db_id="+db_id,true);
xmlhttp.send();	
}
</script>