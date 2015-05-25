<?php
session_start();

include_once('View.php');
$template = new View();

//include_once('DB.php');
//$database = new DB();

include_once('user.php');
if(user::isLoggedIn()){
	echo "yes";
}else{
	echo "no";
}

$template->render('index.php');
?>
