<?php
include "../common.php";
$all=scandir("pid");
for($x=2;$x<sizeof($all);$x++){
	$fn="pid/{$all[$x]}";
	echo $fn;
	if(is_dir($fn)){
	if(strpos($fn,"_files")>1){
		//rename($fn,str_replace("_files","",$fn));
		echo "replace";
		}
		
	//test_dir($fn);
	info_dir($fn);
	echo "<br>";
	}
	//$new_n="pid{$x}_{$fn}";
	//rename($fn,$new_n);
	//rename($fn,str_replace("}","",$fn));
}

function test_dir($dir){
	$c=1;
	$st=explode("_",$dir)[0];	
	$all=scandir($dir);
	for($x=2;$x<sizeof($all);$x++){
	//echo $all[$x]."<br>";
	$fn=$all[$x];
	echo "{$dir}/{$fn}";
	if(strpos($fn,".jpg")>1){
		//echo stat("{$dir}/{$fn}")[7];
		if(stat("{$dir}/{$fn}")[7]>10000){
		if(!is_file("{$dir}/{$st}_{$c}.jpg")){
			//rename("{$dir}/{$fn}","{$dir}/{$st}_{$c}.jpg");
		}else{echo "alerady";}
		//
		$c++;
		echo " replace";
			}else{//unlink("{$dir}/{$fn}");
				}
		}
		else{
		
		//unlink("{$dir}/{$fn}");	
		echo " DELETe";
		
		}
		echo "<br>";

}
}
function info_dir($dir){
	$st=explode("_",$dir);
	$all=scandir($dir);
	$sof=sizeof($all);
	$sof=$sof-2;
	$pid=explode("/",$st[0])[1];
	//echo $pid;
	echo "--{$sof}";
	if(num_rows("pid","pid",$st[0])<1){
	//	sql_query("insert into pid (name,pid,count,formate,dir) values ('{$st[1]}','{$pid}','{$sof}','jpg','{$dir}')");
		}
	
	for($x=2;$x<sizeof($all);$x++){
		
	}
}

//test_dir("pid99_shaifali-rajdut");
//info_dir("pid99_shaifali-rajdut");
//rename("pid117_zuhia-k/9SH51129103-35637a.jpg","pid117_zuhia-k/pid117_1.jpg");
?>