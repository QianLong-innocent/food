<?php
	session_start();
	header("Content-Type:text/html;charset=utf-8");
	unset($_SESSION['user']);
	$_SESSION['user'] = '';
	echo"<script> history.back();</script>";
?>