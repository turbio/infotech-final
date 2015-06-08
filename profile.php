<?php
include_once('View.php');
include_once('debug.php');
include_once('user.php');

if(user::isLoggedIn()){
	$template = new View();
	$template->render('index.php');
}else{
	header('Location: dashboard.php');
}

