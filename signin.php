<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$template = new View();

$template->embed = !empty($_GET['e']);

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
		$template->error = $e->getMessage();
	}
}
echo "test";
if(!isset($_SESSION['user']) || !isset($_SESSION['id'])){
	if(!empty($_POST["username"]) && !empty($_POST["password"])){
		$template->loginAttempt = true;

		$userQuery = $database->query(
			'SELECT * FROM users WHERE username = "'. $_POST["username"] . '";');
		$userInfo = $userQuery->fetch();

		if(!empty($userInfo["password"]) && !empty($userInfo["salt"]) && !empty($userInfo["id"])){
			$rehashedPass = hash("sha256", $_POST["password"] . $userInfo["salt"]);

			if($userInfo["password"] == $rehashedPass){
				$template->correctCred = true;
				$template->loggedIn = true;
				$_SESSION['user'] = $userInfo["username"];
				$_SESSION['id'] = $userInfo["id"];
				echo "IT PASSED THROUGH";
			}

		}else{
			$template->correctCred = false;
			echo "INCORRECT CRED";
		}
	}
}else{
	$template->loggedIn = true;
	echo "LOGGED IN";
}

$template->render('signin.php');
