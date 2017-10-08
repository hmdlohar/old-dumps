<?php
include 'db.php';
mysql_set_charset('utf8');
function sql_query($query){
	mysql_set_charset('utf8');
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}
function num_rows($table,$field,$value){
	$retval=sql_query("select $field from $table where $field='$value'");
	
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function sql_query2($query){
	include "db.php";
	mysql_select_db($dbname);
	$retval=mysql_query($query,$conn);
	if(!$retval){echo mysql_error();}else{
	return $retval;}
}
function td_field($field,$var,$id,$func){
	return "<input type=text id={$field}{$id} value='{$var}'><button onclick={$func}('{$field}','{$id}','{$field}{$id}')>ED</button>";
	}
function get_cat($type){
	switch($type){
	case "pics": $text="Photos";
	break;
	case "xxxpics": $text="(18+)Photos";	
	break;	
	case "sex_story": $text="Sex Story";	
	break;	
	case "audio_sex": $text="Audio Sex";	
	break;	
	}
	return $text;
}
function get_get($get,$get2){
	$str="?";
foreach($get as $key => $value)
{
	$str.="{$key}={$value}&";
	
}
$str.=$get2;
return $str;
}
function check_uri($uri,$field){
	include 'files/db.php';
	$sql="SELECT uri FROM hits WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function get_perent($id){
$retval=sql_query("select perent from menu where link='{$id}'");
$row=mysql_fetch_array($retval);
return $row[0];

}
function home_perent($link){
$pr=array();
$perent=get_perent($link);
while($perent!="home"){
	$perent=get_perent($perent);
	$pr[]=$perent;
	}
$c=sizeof($pr)-2;
return $pr[$c];
}
function insert_uri($uri,$field){
	include 'files/db.php';
	$sql="INSERT INTO hits (uri,type,hit)VALUES ('$uri','$field',1)";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function hit_uri($uri,$field){
	include 'files/db.php';
	$sql="UPDATE hits SET hit=hit+1 WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function get_uri($uri,$field){
	include 'files/db.php';
	$sql = "SELECT hit FROM hits WHERE uri='$uri'&&type='$field'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row['hit'];
	}
}
function uri($uri){
	$uri= str_replace("/","_",$uri);
	$uri=str_replace("?","_",$uri);
	$uri=str_replace("&","_",$uri);
	$uri=str_replace("=","_",$uri);
	$uri=str_replace(".","_",$uri);
	$uri=str_replace(":","_",$uri);
	return $uri;
}
function in_sql($query2,$query){
	$retval=sql_query($query2);
	$num=mysql_num_rows($retval);
	if($num==0){
		sql_query($query);
		return 1;
	}else{
		echo "already inserted";
		return 0;
	}
}
function is_set($var,$defult_value,$method){
if($method=="GET"){
	if(isset($_GET[$var])){
		$var2=$_GET[$var];
		}else{
			$var2=$defult_value;
			}}
if($method=="POST"){
	if(isset($_POST[$var])){
		$var2=$_POST[$var];
		}else{
			$var2=$defult_value;
			}}
	return $var2;
}
function type_name($type){
	include 'files/db.php';
	$sql = "SELECT * FROM list WHERE link='$type'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row['name'];
	}
}
function in_pics($name,$link,$total,$status,$url){
	include 'files/db.php';
	$sql="insert into pics (name,link,total,status,url) values ('$name','$link','$total','$status','$url')";
	$retval=sql_query($sql);
	return $retval;
}
function get_perent_name($id){
$retval=sql_query("select name from menu where link='{$id}'");
$row=mysql_fetch_array($retval);
return $row[0];
}
function get_get2(){
$get=$_GET;
$str="";
foreach($get as $key=>$value){
	$str.=$key;
	$str.="=";
	$str.=$value;
	$str.="&";
}
$str=substr($str,0,strlen($str)-1);
return $str;
}
?>