<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="splash_actions.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
	<div class="image_slide">
		<img src="res/splash_photo.jpg"/>
	</div>
<?php
include_once('title_bar.php');
$titlebar = new TitleBar();
$titlebar->setButton('steam_sign_in_button', '<img src="res/steam.svg" id="steam_logo">', 'steamsignin.php');
$titlebar->setButton('sign_in_button', 'sign in', 'signin.php');
$titlebar->setButton('sign_up_button', 'sign up', 'signup.php');
$titlebar->render();
?>
	<div class="popup" id="account_popup">
		<img src="res/loading.gif"/>
	</div>
	<div id="content_container">
		<div id="message">
	<?php

	echo "<h1> A community of ". $this->user_count ." users</h1>";
	echo "<br/>";
	echo "Lorem ipsum dolor sit amet, vis latine veritus perfecto eu, has cu tollit adolescens interesset. No sit fierent definiebas, no nisl case accumsan quo. Ad vis nominavi qualisque dignissim, ei vide tacimates percipitur sea, no sea officiis eleifend. Ea pro mnesarchum voluptatum. Est errem possit verear ut. Mea ut mutat expetenda.";
	?>
			<!--<div class="splashbar_button" id="sign_up_button">sign up</div>-->
		</div>
	</div>

	<div id="footer"><div class="filler">license</div></div>
</div>
</body>
</html>
