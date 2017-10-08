

<?php
function getlikes($page_id){
$likesnow ="<script type='text/javascript'>
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
   var data=xmlhttp.responseText;
   var obj = JSON.parse(xmlhttp.responseText);
   window.likes =  obj.likes;
   document.write(window.likes);
    }
  }
xmlhttp.open('GET','http://graph.facebook.com/{$page_id}',true);
xmlhttp.send();
</script>";
return $likesnow;
}

function getlikes2(){
$ch = curl_init("http://graph.facebook.com/ritengorbjps?fields=id,likes,name");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$likesnow $data->likes;
}
$ch = curl_init("http://graph.facebook.com/$page");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$raw = curl_exec($ch);
curl_close($ch);
$data = json_decode($raw);
$nowlikes = $data->likes;

?>