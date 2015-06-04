<?php
include_once('debug.php');
include_once('user.php');
include_once('View.php');
include_once('DB.php');
include_once('title_bar.php');

$template = new View();
$database = new DB();

$template->render('dashboard.php');
