<script>
	function get_element(){
tr=document.getElementsByTagName("tr");
email=tr[13].getElementsByTagName("td")[1].innerHTML;
email=email.substring(0,email.indexOf("<div"));
mob=tr[12].getElementsByTagName("td")[1].innerHTML.substring(0,10);
name=tr[0].getElementsByTagName("td")[1].getElementsByTagName("font")[1].innerHTML.substring(8);
enrol=tr[2].getElementsByTagName("td")[0].getElementsByTagName("b")[1].innerHTML.substring(0,9);
ajax1(name,mob,email,enrol);
}
function ajax1(name,mob,email,enrol){
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
		
    
   data = xmlhttp.responseText;
result_add(data);
    }
  }
xmlhttp.open("GET","enrol.php?enrol_in="+enrol+"&name="+name+"&mob="+mob+"&email="+email,true);
xmlhttp.send();
//hmd=document.getElementsByClassName("catList")[0].getElementsByClassName("catRow")[0].getElementsByTagName("a");
}
function result_add(text){
	document.getElementById("result").innerHTML=document.getElementById("result").innerHTML+"<br>"+text;
}

</script>

<?php
include "common.php";
if(isset($_GET['enrol'])){

//$enrol=is_set("enrol",147822303,"GET");
$enrol=$_GET['enrol'];
function get_enrol($enrol){
$url="http://admission.ignou.ac.in/changeadmdata/admissionstatusnew.asp";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "EnrNo={$enrol}&program=MCA&Submit=submit");
curl_setopt($ch, CURLOPT_HTTPHEADER, array(""));
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows CE 5.2; en-US; rv:1.9.2a1pre) Gecko/20090210 Fennec/0.11');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
return $server_output;
}
$server_output=get_enrol($enrol);
$result= strlen($server_output);
//echo $server_output;
if($result>5000){
	echo "found";
	if(num_rows("enrol","enrol_no",$enrol)==0){
		echo sql_query("insert into enrol (enrol_no,mobile,name,email)values('$enrol',0,0,0)");
		}else{echo "alerady expis";}
	//echo "<script>get_element();</script>";
}
else{echo "not found";}
}
if(isset($_GET['enrol_in'])){
	$name=$_GET['name'];
	$enrol=$_GET['enrol_in'];
	$mob=$_GET['mob'];
	$email=$_GET['email'];
	echo in_sql("select enrol_no from enrol where enrol_no='hahaha'","update enrol set email='$email',mobile='$mob',name='$name' where enrol_no='$enrol'");
}	

?>
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
