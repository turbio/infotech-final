<?php
include_once('View.php');
include_once('debug.php');
include_once('user.php');
include_once('DB.php');

$database = new DB();


if(user::isLoggedIn()){
	header('Location: dashboard.php');
}else{
	$template = new View();

	$requestString = 'SELECT COUNT(*) FROM users';
	$user_count_query = $database->query($requestString)->fetch()[0];
	$template->user_count = $user_count_query;

	$template->render('index.php');
}

