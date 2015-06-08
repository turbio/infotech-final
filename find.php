<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$template = new View();


//$display_limit = 50;
$requestString = 'SELECT * FROM users';

$user_query = $database->query($requestString);
//$user_query = $info_query->fetch();
$template->user_query = $user_query;


$template->render('find.php');
?>
