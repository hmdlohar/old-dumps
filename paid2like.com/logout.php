<?php
include 'files/var.php';
session_start();
   unset($_SESSION['username']);
	header("Location: index.php");
?>
loger dou
