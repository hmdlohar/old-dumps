<?php
include "common.php";
function get_cookie_txt($fn){
$js="";
$file=fopen("cook/{$fn}","r+");
$c=0;
	$js.="[";
while(!feof($file)){
	$line=fgets($file);
	if($c>3&&strlen($line)>10){$line2=explode("	",$line);
	$js.="{\"host\":\"{$line2[0]}\",\"domain\":\"{$line2[1]}\",\"path\":\"{$line2[2]}\",\"secure\":\"{$line2[3]}\",\"expire\":\"{$line2[4]}\",\"name\":\"{$line2[5]}\",\"value\":\"{$line2[6]}\"}";
	}


$c++;
}
$js.="]";
//print_r(json_encode($arr));
$js=str_replace("}{","},{",$js);
return $js;
}
function check_txt($fn){
	$file=fopen("cook/{$fn}","r+");
	if(!$file){return 0;}else{return 1;}
}
echo "convert running";
for($x=10;$x<=99;$x++){
	$num=$x+1000;
	echo $num."<br>";
	if(check_txt("cookies_00{$x}.txt")==1){
$str_cookie=mysql_real_escape_string(get_cookie_txt("cookies_00{$x}.txt"));
//echo $str_cookie;
if(num_rows("cookie","num",$num)>=1){
		sql_query("update cookie set string='$str_cookie' where num='$num'");
		echo "update";
		}else{
		echo 	sql_query("insert into cookie (num,string) value('$num','$str_cookie')");
		
			}
	}else{echo "nofile";}
}
?>