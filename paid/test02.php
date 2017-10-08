<?php
function fql_run(){
$query="SELECT like_info FROM photo WHERE object_id=973959179332044";	
$query2="SELECT+like_info+FROM+photo+WHERE+pid=891671824218019";	
$q=urlencode($query);
echo "https://api.facebook.com/method/fql.query?format=json&query={$q}";
echo "<a target=ifrm href=https://api.facebook.com/method/fql.query?format=json&query={$q}>hiiiiiiii</a>";
}
fql_run();

?>




<iframe name=ifrm></iframe>

<script>
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
window.obj=JSON.parse( xmlhttp.responseText);
window.obj[0].like_info.like_count;
    
  }
xmlhttp.open("GET","https://api.facebook.com/method/fql.query?format=json&query=SELECT+like_info+FROM+photo+WHERE+object_id%3D973959179332044",true);
xmlhttp.send();
</script>