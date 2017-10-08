<?php

include "common.php";
function do_study($file_name){
$file=fopen("../study_centers/{$file_name}","r+");
$c=1;
while(!feof($file)){
$str= fgets($file);
$str1=explode("        ",$str);
$str2=explode(" ",$str1[0]);
if(isset($str2[5],$str2[4])){
if(strpos($str2[4],"-")>1){
	$str3=explode("-",$str2[4]);
		if($str3[0]=="MCA"){
			$enrol=$str3[1];
		echo $enrol."--------{$file_name}<br>";
		echo sql_query("insert into enrol (enrol_no) values ('{$enrol}')");
		}else{$enrol="";}
}else if(strpos($str2[5],"-")){
		$str3=explode("-",$str2[5]);
		if($str3[0]=="MCA"){
			$enrol=$str3[1];
			echo $enrol."--------{$file_name}<br>";
			echo sql_query("insert into enrol (enrol_no) values ('{$enrol}')");
		}else{$enrol="";}
	
}

//echo $str1[2]."<br>";



$c++;
//if($c>60){break;}

		}
	}
}
function in_enrol(){
	
}

$all=scandir("../study_centers");
for($x=2;$x<sizeof($all);$x++){
	//echo "{$all[$x]}<br>";
	
	do_study($all[$x]);
	
}
echo $c2;
?>