<?php
if(isset($_GET['num'])){
	$num=$_GET['num'];
} 
else{$num=1400;}
$cSession = curl_init();
$post_data = "";
//step2
curl_setopt($cSession,CURLOPT_URL,"http://www.ignou.ac.in/ignou/bulletinboard/announcements/latest/detail/$num");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

echo $result;
$num2=$num+1;
?>
<script>
function title(){

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
   //alert(window.enrol);
   window.location.assign("?num=<?php echo $num2; ?>");
    }
  }
xmlhttp.open("GET","add_title.php?num=<?php echo $num; ?>&title="+document.title,true);
xmlhttp.send();
}
window.timeout=setTimeout("title()",3000);
</script>