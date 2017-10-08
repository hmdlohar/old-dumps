<p id=loading>loading</p>
<button id=getf>getf</button>

<script type=text/javascript>
var access_token = "CAACEdEose0cBABWHgbcZBBf1dJ94U64AJ4lzd09KangIyvdwEOxg14J06zjZAw6mSJqRwJYAH0w3Uiw8jvZB3krpe1UJj5IoG0iT1qAlBIYKPyNSvTw4ngUZBgo5j2bospTG7t59q5rc4npll3Wfl00g7HyubRLnE39Lh264ayDUaUDZBtFEqjvCPbTusCBjaeC1jl4ACZCpoTXXtJjQfXQxEyeqdpduYZD";
var pid=841311972592227;
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
		
    
	window.data=xmlhttp.responseText;
	window.obj = JSON.parse(xmlhttp.responseText);
		document.getElementById('loading').innerHTML=window.data;
	}
    }
xmlhttp.open("GET","http://graph.facebook.com/"+pid+"/likes?limit=30",true);
xmlhttp.send();

function getf(id){
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
		
    
	window.data=xmlhttp.responseText;
	window.obj = JSON.parse(xmlhttp.responseText);
	//document.getElementById('loading').innerHTML=window.data;
	}
    }
xmlhttp.open("GET","http://graph.facebook.com/"+pid+"/likes?limit=30",true);
xmlhttp.send();	
	
	}

</script>