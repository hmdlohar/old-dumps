<!DOCTYPE html>
<html>
<head>
<script>
function getlikes(enrol){
	
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
		
    
   window.enrol = xmlhttp.responseText;
  // document.getElementById("data").innerHTML= data;
   //var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById("data2").innerHTML= window.enrol;

    }
  }
xmlhttp.open("GET","test6.php?enrol="+enrol ,true);
xmlhttp.send();

}
getlikes(147822333);
</script>

<p id=data>h</p>
<p id=data2>h</p>

