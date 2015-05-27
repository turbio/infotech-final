<?php
include_once('View.php');
include_once('debug.php');
include_once('user.php');

if(user::isLoggedIn()){
	header('Location: dashboard.php');
}else{
	$template = new View();
	$template->render('index.php');
}

