<form action="" method="GET" id=form1>
<input type=text name=id><input type=submit>
</form> 
<p id=text>heer</p>
<?php 
include 'db.php';
if(isset($_GET['id'])){
$id=$_GET['id']; 
$id2= $id+1;
$sql="SELECT * FROM enrol WHERE id='$id'";
mysql_select_db($dbname);
$retval = mysql_query($sql,$conn);
while($row = mysql_fetch_array($retval)){
	$number=$row['number'];
	$link=base64_decode($row['link']);
	echo "enrol={$number}<hr>{$link}";
	}
}

?>
<script>
var td1 =document.getElementsByClassName('td1');
var td= document.getElementsByTagName('td');
var td2 =document.getElementsByClassName('td2');

window.p_name = td[0].getElementsByTagName('font')[1].innerHTML;
window.p_enrol=td2[2].getElementsByTagName('b')[1].innerHTML;
window.p_cource=td2[2].getElementsByTagName('b')[3].innerHTML;
window.p_add_year=td1[0].getElementsByTagName('td')[1].innerHTML;
window.p_till_year=td2[4].getElementsByTagName('td')[1].innerHTML;
window.p_birth=td1[2].getElementsByTagName('td')[1].innerHTML;
window.p_father=td1[1].getElementsByTagName('td')[1].innerHTML;
window.p_father=td1[1].getElementsByTagName('td')[1].innerHTML;
window.p_regnal=td1[3].getElementsByTagName('td')[1].innerHTML.substring(0,10);
window.p_mobile=td1[4].getElementsByTagName('td')[1].innerHTML.substring(0,10);
window.p_study_center=td2[6].getElementsByTagName('td')[1].innerHTML;
window.p_address=td2[5].getElementsByTagName('td')[1].innerHTML;
var email_temp=td2[7].getElementsByTagName('td')[1].innerHTML;
if(email_temp.indexOf('@')>1){var substrs=email_temp.indexOf("<");window.p_email=email_temp.substring(0,substrs);}else{window.p_email = 0;}

function send_ig(){
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
   var text=document.getElementById('text');
   text.innerHTML = window.enrol;
   window.location.assign("index2.php?id=<?php echo $id2; ?>");
   
    }
  }
xmlhttp.open("GET","in_ig.php?enrol="+window.p_enrol+"&data="+window.p_add_year+","+window.p_address+","+window.p_birth+","+window.p_cource+","+window.p_email+","+window.p_enrol +","+window.p_father+","+window.p_mobile +","+window.p_name+","+window.p_regnal+","+window.p_study_center+","+window.p_till_year ,true);
xmlhttp.send();
}
send_ig();

</script>