<?php
include 'files/var.php';
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: {$url}/login.php");
	die;
	}

?>
