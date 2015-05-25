<?php
//this can be included in every file and will draw an overlay when
//GET variable 'debug' is set to 1

if(!empty($_GET['debug'])){
	echo 'debug enabled';
	phpinfo();
}

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>
