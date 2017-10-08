<?php
include "../common.php";
if(isset($_GET['movie'])){
	$movie=$_GET['movie'];
	$link=$_GET['link'];
	$perent=$_GET['perent'];
	$cat="menu";
	if(num_rows("menu_test","link","$link")==0){
	sql_query("insert into menu_test (name,link,perent,cat) values ('$movie','$link','$perent','$cat')");
	}else{echo "link already used";}
}
if(isset($_GET['movie2'])){
	$movie=mysql_real_escape_string($_GET['movie2']);
	$link=mysql_real_escape_string($_GET['link']);
	$perent=$_GET['perent'];
	$cat="obj";
	if(num_rows("menu_test","link","$link")==0){
	sql_query("insert into menu_test (name,link,perent,cat) values ('$movie','$link','$perent','$cat')");
	}else{echo "link already used";}
}
if(isset($_GET['pedit'])){
	$movie=$_GET['pedit'];
	$item=$_GET['item'];
	$id=$_GET['id'];
	$cat="obj";
	sql_query("update menu_test set name='$movie', item='$item' where id='$id'");
}
if(isset($_GET['pedit2'])){
	$movie=$_GET['pedit2'];
	$item=$_GET['item'];
	$id=$_GET['id'];
	$cat="obj";
	sql_query("update menu_test set u_link='$movie' where id='$id'");
}
else{
	echo "nosetss";
	}

?>