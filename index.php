<?php
session_start();

include_once('View.php');
$template = new View();

include_once('DB.php');
$database = new DB();

$template->render('index.php');
?>
