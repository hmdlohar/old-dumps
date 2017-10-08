mailingStatus=0;
mailingStart=0;
mailingEnd=0;
mailingCurrent=0;
function startMailing(){
	mailingStart=parseInt(document.getElementById("startFrom").value);
	mailingEnd=parseInt(document.getElementById("endAt").value);
	mailingCurrent=mailingStart;
	mailingStatus=1;
	doSingleMail(mailingCurrent);
}
function stopMailing(){
	mailingStatus=0;
}
function updateEmailCount(count){
	document.getElementById("emailCount").innerHTML=count;
}
function doSingleMail(emailNum){
	if(mailingStatus==1){
		getEmail(emailNum);
	}
}


function sendMail(email){
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
   var data=xmlhttp.responseText;
   
		changeStatus(email,parseInt(data));
		updateEmailCount(mailingCurrent);
	   mailingCurrent=mailingCurrent+15;
	   setTimeout(function(){doSingleMail(mailingCurrent);},10000);

    }
  }
xmlhttp.open("GET","gmail.php?useremail="+email,true);
xmlhttp.send();
}

function getEmail(emailNum){
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
   var data=xmlhttp.responseText;
	   sendMail(data);
	   document.getElementById("emailNow").innerHTML=data;

    }
  }
xmlhttp.open("GET","getEmail.php?emailNum="+emailNum,true);
xmlhttp.send();
}

function changeStatus(emailNum,status){
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
   var data=xmlhttp.responseText;
	 

    }
  }
xmlhttp.open("GET","changeStatus.php?emailNum="+emailNum+"&status="+status,true);
xmlhttp.send();
}