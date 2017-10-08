<?php
include 'db.php';
if(isset($_GET['alld'])){
	$alld=$_GET['alld'];
	}else{$alld="deepak.joorail0hmdrehan887hmdjackob.needs.lovehmdanbutkm143hmdraju.dhandu0hmddhiravidhmdbatang.kecik.kote.comel0hmdliza707hmdwantjob1hmdvaneeehmdranjeetshakyahmdshabeer96hmdangel.sheela90hmdsheeraz774hmdthilini25hmdharidharshan007hmdi.need.job1hmdkavirajsadhuhmdaniljena123hmdfundiii0hmdaah.janu.thora.aram.se.bohot.0hmdwhiterose333hmdgtm26hmdunni1234hmdtito.vergudo.lechoso0hmdameetmehmdmemeyoohmdsathish46023hmdmohit709hmdpapytzu0hmdvinoth291hmdmumpi20hmdtombana.na.me0hmdrayryhmdniizam5011hmdto.mati.tou.tigrihmdwild.cpl01hmdjehoseehmditalian.doc1hmdsweaty12hmdsuri35771hmdkananx13hmdsmartboybd1hmdd.g.varamhmdkissonlundhmdsujeetsrivastavhmdatrevido19hmdpmloveindiahmdraj6856hmdana921hmdaqmencarimuhmdwap690hmdvirat9887hmddilip.chauhan371hmdlove.error0hmdnossirajhmdyza1hmdkate.latijia66hmdraj4u250hmdvaishakmnglrhmdlatha2015hmd";}
$allds=split("hmd",$alld);

for($i=0;$i<=60;$i++){
	$sql="SELECT userid FROM pepe WHERE userid='$allds[$i]'";
	mysql_select_db($dbname);
	$retval=mysql_query($sql,$conn);
	$num_row=mysql_num_rows($retval);
	if($num_row==0){
		$sql="INSERT INTO pepe (userid) VALUES ('$allds[$i]')";
		mysql_select_db($dbname);
		$retval=mysql_query($sql,$conn);
		if(!$retval){
			echo mysql_error();
			}
		}
	
	}

?>