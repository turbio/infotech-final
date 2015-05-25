<?php
include_once('debug.php');
include_once('api/steam.php');

//include_once('DB.php');
//$database = new DB();

$steam = new steamInterface();

//five sequential random test profiles
//(no idea who these are)
$steam->request(
	array(
		"76561198044116279",
		"76561198044116280",
		"76561198044116281",
		"76561198044116282",
		"76561198044116283"
	)
);

?>
