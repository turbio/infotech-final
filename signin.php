<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$template = new View();

if(!empty($_GET['e'])){
	$template->embed = true;
}

$template->render('signin.php');
?>
