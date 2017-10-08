<?php
include 'files/db.php';
function isLoged(){
		include 'files/db.php';
if (isset($_COOKIE['userLoged'])&& $_COOKIE['userLoged']!= ""){
	$usernow = $_COOKIE['userLoged'];
	$profile = profile($usernow,$dbname,$conn);
	if($profile['other']==1){
		return 1;
		}else{
			return 2;
			}
	}	
	else{
	return 0;
	}
}
function loginNow($username){
	setcookie('userLoged', $username, time() + (86400 * 30), "/");
}
function profile($user,$dbname,$conn){
	$sql = "SELECT * FROM user WHERE username='$user'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		$fname = $row['fname'];
		$lname = $row['lname'];
		$username = $row['username'];
		$password = $row['password'];
		$country = $row['country'];
		$mobile = $row['mobile'];
		$gender = $row['gender'];
		$fbid = $row['fbid'];
		$youtubeid = $row['youtubeid'];
		$tweeterid = $row['tweeterid'];
		$money = $row['money'];
		$reg_date = $row['reg_date'];
		$login_date = $row['login_date'];
		$other = $row['other'];
		return $row;
		}
}
function page_array(){
	include 'files/db.php';
	$page_ids;
	$user_ids;
	$sql = "SELECT * FROM pages";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		$page_ids[]=$row['link_id'];
		$user_ids[]=$row['userid'];
	}
	$page_array['ids']=$page_ids;
	$page_array['user']=$user_ids;
	return $page_array;
}
function get_user_money($user){
		include 'files/db.php';
		$sql = "SELECT money FROM user WHERE username='$user'";
		mysql_select_db($dbname);
		$retval = mysql_query($sql,$conn);
		while($row=mysql_fetch_array($retval)){
		$money = $row['money'];
		return $money;
		}
}
function get_next_page($user){
	include 'files/db.php';
	$sql = "SELECT page_array FROM user WHERE username='$user'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row['page_array'];
	}
}
function next_page2($user){
	include 'files/db.php';
	$ary=get_next_page($user);
	$sql = "SELECT * FROM pages LIMIT 1 && id not in($ary)";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	while($row=mysql_fetch_array($retval)){
		return $row;
	}
}
function total_likes($link,$action){
	include 'files/db.php';
	$sql="SELECT id FROM log WHERE link='$link'&& action='$action'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function check_uri($uri){
	include 'files/db.php';
	$sql="SELECT uri FROM hits WHERE uri='$uri'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	$num_rows=mysql_num_rows($retval);
	return $num_rows;
}
function insert_uri($uri){
	include 'files/db.php';
	$sql="INSERT INTO hits (uri)VALUES ('$uri')";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function hit_uri($uri){
	include 'files/db.php';
	$sql="UPDATE hits SET hit=hit+1 WHERE uri='$uri'";
	mysql_select_db($dbname);
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		echo mysql_error();
		}
}
function get_uri($uri){
	include 'files/db.php';
	$sql = "SELECT hit FROM hits WHERE uri='$uri'";
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
	return $uri;
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
?>