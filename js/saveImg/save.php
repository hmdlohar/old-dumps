<form action="" method=POST>
url-<input type=text name=urlDirName>
dir-<input type=text name=dir>
name-<input type=text name=name>
<input type=submit></input>
</form>

<?php
include "common.php";
if(isset($_POST['url'])){
	$url=$_POST['url'];
	echo "simpel scae";
	//echo $url;
	$getnum=sql_query("select hit from hits where uri='mynum'");
	$row=mysql_fetch_array($getnum);
	$num=$row[0];
	echo $num;
	echo sql_query("update hits set hit=hit+1 where uri='mynum'");
	$task=file_put_contents("imgs/img{$num}.jpg", fopen($url, 'r'));
	if(!$task){
	echo "error";//echo sql_query("update hits set hit=hit+1 where uri='mynum'");
	}else{
	
	}
}
if(isset($_POST['urlDir'])){
	echo "url dir savae";
	$url=$_POST['urlDir'];
	$dir=$_POST['dir'];
	//echo $url;
	$getnum=sql_query("select hit from hits where uri='mynum'");
	$row=mysql_fetch_array($getnum);
	$num=$row[0];
	echo $num;
	echo sql_query("update hits set hit=hit+1 where uri='mynum'");
		$path = "imgs/{$dir}";
	if(!is_dir($path)){
		mkdir($path);
	}
	$task=file_put_contents("imgs/{$dir}/img{$num}.jpg", fopen($url, 'r'));
	if(!$task){
	echo "error";//echo sql_query("update hits set hit=hit+1 where uri='mynum'");
	}else{
	
	}
}
if(isset($_POST['urlDirName'])){
	echo "url dir savae";
	$url=$_POST['urlDirName'];
	$dir=$_POST['dir'];
	$name=$_POST['name'];
			$path = "imgs/{$dir}";
		if(!is_dir($path)){
		mkdir($path);
	}
	//echo $url;
	$name=str_replace(' ', ' ', $name);
	echo "---{$name}---";
	$task=file_put_contents("imgs/{$dir}/{$name}.jpg", fopen($url, 'r'));
	if(!$task){
	echo "error";//echo sql_query("update hits set hit=hit+1 where uri='mynum'");
	}else{
		echo "srcess";
	}
}


?>