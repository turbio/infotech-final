<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$template = new View();

$template->embed = !empty($_GET['e']);

if(!empty($_POST['username'])
&& !empty($_POST['password'])
&& !empty($_POST['email'])){
	try{
		user::signup(
			$_POST['username'],
			$_POST['password'],
			$_POST['email'],
			$database);

		user::sign;

	}catch(Exception $e){
		$template->error = $e->getMessage();
	}
}

$template->render('signup.php');
?>
