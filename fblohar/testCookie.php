<?php 
if(isset($_GET['set'])){
	setcookie("1", "cookie1", time() + 3600, "/");
}
echo $_COOKIE['1']."<hr>";
echo $_COOKIE['3']."<hr>";
echo $_COOKIE['2']."<hr>";

?>
<a href="?set=1">set COokie</a>
