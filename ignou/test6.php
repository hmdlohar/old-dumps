<?php
$file=fopen("study_centers/E23A0.txt","r+");
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
		}else{$enrol="";}
}else if(strpos($str2[5],"-")){
		$str3=explode("-",$str2[5]);
		if($str3[0]=="MCA"){
			$enrol=$str3[1];
			
		}else{$enrol="";}
	
}

//echo $str1[2]."<br>";

print_r($enrol);

$c++;
//if($c>60){break;}
echo "<br>";
}
}
function in_enrol(){
	
}
?>