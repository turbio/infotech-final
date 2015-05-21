<?php
session_start();

include_once('View.php');
include_once('DB.php');

$template = new View();
$database = new DB();

// This file can be found in the templates directory.
$template->render('index.php');
