<?php
include_once('View.php');
include_once('debug.php');
include_once('user.php');
include_once('DB.php');

$database = new DB();


if(user::isLoggedIn()){
	header('Location: dashboard.php');
}else{
	
	$requestString = 'SELECT COUNT(*) FROM users';
	$info_query = $database->query($requestString);
	$user_count_query = $info_query->fetch();
	$template->user_count_query = $user_count_query;

	
	$template = new View();
	$template->render('index.php');
}

