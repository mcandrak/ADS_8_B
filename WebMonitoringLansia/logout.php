<?php
	session_start();
	unset($_SESSION['admin_nm']);
	header('location:login.php');
?>
