<?php
if (isset($_GET['access_token'])){
$access_token = $_GET['access_token'];
$cSession = curl_init();
$post_data="";
curl_setopt($cSession,CURLOPT_URL,"https://graph.facebook.com/me/groups?fields=id&access_token=$access_token");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($cSession, CURLOPT_SSL_VERIFYHOST, 2);
//curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5



?>
<form action=jsonurl.php method=POST target=new>
<script type=text/javascript>
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
  //document.getElementById("result2").innerHTML= xmlhttp.responseText;
 // alert(window.enrol);
   //var obj = JSON.parse(xmlhttp.responseText);
   document.getElementById("result2").innerHTML= window.enrol;

    }
  }
xmlhttp.open("GET","http://graph.facebook.com/hmdlohar?fields=id,name,likes",true);
xmlhttp.send();
}
var data = '<?php echo $result; ?>';
//alert(data);
 // document.getElementById("result2").innerHTML=data;

 var obj = JSON.parse(data);

 //document.getElementById("result3").innerHTML=(obj.data[0].id).langth;


	var key, count = 0;
for(key in obj.data) {
  if(obj.data.hasOwnProperty(key)) {
    count++;
  }
}
//document.getElementById("result3").innerHTML=count;
alert(count);
document.write('<textarea name=groups cols=100 rows=20>');
function display(){

for (var i=0;i<=count;i++){
document.write('"'+obj.data[i].id+'",');


}
}
display();
</script>
</textarea>
<input type=hidden name=access_token value="<?php echo $access_token; ?>">
<input type=submit value=send>
</form>

<?php

}
?>
<form action="<?php $_PHP_SELF ?>" method=GET>
<input type=text name=access_token>
<input type=submit>
</form>