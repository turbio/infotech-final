<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$signin = new View();

$embed = !empty($_GET['e']);
$signin->error = False;

if(!empty($_POST['username'])
&& !empty($_POST['password'])){
	try{
		user::signin(
			$_POST['username'],
			$_POST['password'],
			$database);

		header("Location: index.php");
		die();
	}catch(Exception $e){
		$signin->error = $e->getMessage();
	}
}


if($embed){
	$signin->render('signin.php');
}else{
	$sign = new View();
	$sign->template = $signin;
	$sign->templatePath = 'signin.php';

	$base = new View();
	$base->template = $sign;
	$base->templatePath = 'sign.php';
	$base->render('base.php');
}
