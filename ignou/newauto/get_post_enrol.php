<?php
include "db.php";
include "common.php";

if(isset($_GET['enrol_in'])){
	$name=$_GET['name'];
	$enrol=$_GET['enrol_in'];
	$program=$_GET['program'];
	$father_name=$_GET['father_name'];
	$address=$_GET['address'];
	$reg_center=$_GET['reg_center'];
	$study_center=$_GET['study_center'];
	$mobile=$_GET['mobile'];
	$email=$_GET['email'];
	//echo in_sql("select enrol_no from enrol where enrol_no='$enrol'","insert into test (enrol,mobile,name,email) values ('$enrol','$mob','$name','$email')");
	echo sql_query("update enrol set name='{$name}',program='{$program}',father_name='{$father_name}',address='{$address}',reg_center='{$reg_center}',study_center='{$study_center}',mobile='{$mobile}',email='{$email}' where enrol_no='{$enrol}'");
}	
if(isset($_GET['get_enrol'])){
	$num=$_GET['get_enrol'];
	$retval=sql_query("select enrol_no from enrol where id={$num}");
	$row=mysql_fetch_array($retval);
	$enrol=$row[0];
	$new_num=$num+1;
	echo get_enrol($enrol);
	
	if($num<5600){
		echo "<script>setTimeout(function(){document.location.assign('?get_enrol={$new_num}');},2000);</script>"; echo "yaaaaaaaaaa";
	}
	
}


?>
<p id=result style="position:fixed;right:25px;top:20px;">result</p>
<script>
function get_tr(){
tr=document.getElementsByTagName("tr");
email=tr[9].getElementsByTagName("td")[1].innerHTML;
mob=tr[8].getElementsByTagName("td")[1].innerHTML;
study_center=tr[7].getElementsByTagName("td")[1].innerHTML;
reg_center=tr[6].getElementsByTagName("td")[1].innerHTML;
address=tr[5].getElementsByTagName("td")[1].innerHTML;
father_name=tr[4].getElementsByTagName("td")[1].innerHTML;
name=tr[3].getElementsByTagName("td")[1].innerHTML;
program=tr[2].getElementsByTagName("td")[1].innerHTML;
enrol=tr[1].getElementsByTagName("td")[1].innerHTML;
student=Array(enrol,program,name,father_name,address,reg_center,study_center,mob,email);
return student;
}

//ajax1(name,mob,email,enrol);
function ajax1(student){
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
xmlhttp.open("GET","get_post_enrol.php?enrol_in="+student[0]+"&program="+student[1]+"&name="+student[2]+"&father_name="+student[3]+"&email="+student[8]+"&reg_center="+student[5]+"&study_center="+student[6]+"&mobile="+student[7]+"&address="+student[4],true);
xmlhttp.send();
//hmd=document.getElementsByClassName("catList")[0].getElementsByClassName("catRow")[0].getElementsByTagName("a");
}
ajax1(get_tr());
function result_add(text){
	document.getElementById("result").innerHTML=document.getElementById("result").innerHTML+"<br>"+text;
}

</script>