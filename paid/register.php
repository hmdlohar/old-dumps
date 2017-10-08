<?php
include 'head.php';

?>
<div id=center style="margin-left:20px;width:700px;">

<form action="panel/check_email.php" method=POST name=signup onsubmit="//return check_form()">
	<div id=form_area>
<div class=input_area><span id=form_left>First Name:</span><input type=text class=from_input name=fname></div>
<div class=input_area><span id=form_left>Last Name:</span><input type=text class=from_input name=lname></div>
<div class=input_area><span id=form_left>Email Address:</span><input id=email type=text class=from_input name=email><p id=email_used style="color:red;margin-left:180;display:none">Email Alerady Used</p></div>
<div class=input_area><span id=form_left>Mobile Number:</span><input type=text class=from_input name=mobile></div>
<div class=input_area><span id=form_left>Gender:</span><select name=gender class=from_input style="width:px;">
<option value=male>Male</option>
<option value=female>Female</option>
</select></div>
<div class=input_area><span id=form_left>Country:</span><select name=country class=from_input style="width:px;">
<option value=india>India</option>
<option value=other>Other</option>
</select></div>
<div class=input_area><span id=form_left>Username:</span><input id=username type=text class=from_input name=username><p id=user_used style="color:red;margin-left:180;display:none">Username Not Avelable</p></div>
<div class=input_area><span id=form_left>Password:</span><input id=password type=password class=from_input name=password></div>
<div class=input_area><span id=form_left>Re-enter Password:</span><input id=re_password type=password class=from_input name=re_password></div>
<?php


?>
<div class=input_area><input type=button onclick="check_form()" id=form_submit value="Sign Up" name=submit></div>
<input type=submit id=submit_it disabled=ture name=submit2 style="display:none;deseble:ture;" value=submitnow>
<div class=input_area><a href="login.php" style="text-decoration:none;font-size:20px;color:#3A6969;margin-left:150px;">Have Account Already?</a></div>
</div>
</form>

</div>
<?php
include 'foot.php';
?>
<script type=text/javascript>
function check_form(){
	
	 document.getElementById('form_submit').disabled = true;
	 document.getElementById('form_submit').value = "Please wait...";
inputs();
email();
password();
sendajax();
}
function inputs(){
var inputs = document.getElementsByTagName('input');
var count = inputs.length;
	for (j=0;j<count;j++){
		if (inputs[j].value == "" || inputs[j].value == null){
			alert("Please Fill Up The Feild '"+ inputs[j].name +"'.");
			inputs[j].focus();
			break;
			}
		}
	}
function email(){
var email = document.getElementById('email');	
var ate=  email.value.indexOf('@');
var dot=  email.value.indexOf('.');
if(ate<1 || dot < ate){
	alert("Enter Valued Email");
	}
}
function password(){
var pass1 = document.getElementById('password').value;	
var pass2 = document.getElementById('re_password').value;	
	if (pass1 != pass2){
	alert("Password And Re-password are Different");
	document.getElementById('form_submit').disabled = false;
	document.getElementById('form_submit').value= "Sign Up";
	clearTimeout(window.sform);
	return false;
	} 
}
	
function sendajax(){
var email = document.getElementById('email');
var username = document.getElementById('username');

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
   window.data =xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","panel/check_email.php?email="+email.value+"&username="+username.value,true);
xmlhttp.send();
window.sfrom = setTimeout(function (){ 
	
	if (window.data == 00){
		document.getElementById('submit_it').disabled = false;
		var submit =document.getElementById('submit_it');
		submit.click();
		}
		else{
			var email_used =document.getElementById('email_used');
			var user_used =document.getElementById('user_used');
			if (window.data == 10){email_used.style.display = "block";}
			if (window.data == 01){user_used.style.display = "block";}
			if (window.data == 11){email_used.style.display = "block";user_used.style.display = "block";}
			 document.getElementById('form_submit').disabled = false;
			  document.getElementById('form_submit').value= "Sign Up";
			}
	
	},2000);

}
</script>

