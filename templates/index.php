<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="splash.css">
	<script src="splash_actions.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
	<div class="image_slide">
		<img src="res/splash_photo.jpg"/>
	</div>
	<div id="splashbar">
		<a href="index.php"><div id="logo_container" class="splashbar_button">
			<div id="logo_icon_container">
				<object type="image/svg+xml" data="res/logo.svg" id="logo">
					logo
				</object>
			</div>
			<div id="logo_text">Title</div>
		</div></a>
		<div id="right_button_container">
			<a href="signup.php" id="sign_up_link">
				<div class="splashbar_button" id="sign_up_button">sign up</div>
			</a>
			<div class="popup" id="account_popup">
				<img src="res/loading.gif"/>
			</div>
			<a href="signin.php" id="sign_in_link">
				<div class="splashbar_button">sign in</div>
			</a>
			<a href="signin.php?steam=1">
				<div class="splashbar_button">
					<object type="image/svg+xml" data="res/steam.svg" id="steam_logo">
						steam logo
					</object>
				</div>
			</a>
		</div>
	</div>
	<div id="content_container">
		<div id="message">
	<?php
	echo "<h1>community of 0+ users</h1>";
	echo "<br/>";
	echo "Lorem ipsum dolor sit amet, vis latine veritus perfecto eu, has cu tollit adolescens interesset. No sit fierent definiebas, no nisl case accumsan quo. Ad vis nominavi qualisque dignissim, ei vide tacimates percipitur sea, no sea officiis eleifend. Ea pro mnesarchum voluptatum. Est errem possit verear ut. Mea ut mutat expetenda.";
	?>
			<div class="splashbar_button" id="sign_up_button">sign up</div>
		</div>
	</div>

	<div id="footer"><div class="filler">footer stuff here</div></div>
</div>
</body>
</html>
