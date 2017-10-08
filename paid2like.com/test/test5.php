<?php
session_start();
if (isset($_SESSION['username'])){
	$user = $_SESSION['username'];
	echo "welcome back {$user}";
	}
	else{
	
}

/*
if (isset($_SESSION['username'])){

$user_now = $_SESSION['username']; 
echo "you are loged in";
}
else {
	header ("Location: login.php");
	}

*/
?>
<ul>
	<li>name</li>
	<li>account</li>
	<?php if (isset($_SESSION['username'])){ echo "<li>pass</li>"; } ?>

</ul>
