<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$signup = new View();

$embed = !empty($_GET['e']);
$signup->error = False;

if(!empty($_POST['username'])
&& !empty($_POST['password'])
&& !empty($_POST['email'])){
	try{
		user::signup(
			$_POST['username'],
			$_POST['password'],
			$_POST['email'],
			$database);

		user::signin(
			$_POST['username'],
			$_POST['password'],
			$database);

		header("Location: index.php");
		die();

	}catch(Exception $e){
		$signup->error = $e->getMessage();
	}
}

if($embed){
	$signup->render('signup.php');
}else{
	$sign = new View();
	$sign->template = $signup;
	$sign->templatePath = 'signup.php';

	$base = new View();
	$base->template = $sign;
	$base->templatePath = 'sign.php';
	$base->render('base.php');
}
