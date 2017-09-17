<?php 
require_once 'auth.php';
if(!isLoggedIn())
	redirectAndExit('index.php');
?>

Hi, you're logged in