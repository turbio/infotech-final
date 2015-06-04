<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');

$database = new DB();

$template = new View();

$template->embed = !empty($_GET['e']);

$template->render('signin.php');
