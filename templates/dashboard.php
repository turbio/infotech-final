<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
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
			<!--<div class="popup" id="account_popup">-->
			<!--	<img src="res/loading.gif"/>-->
			<!--</div>-->
			<a href="profile.php" id="sign_in_link"><div class="splashbar_button">
<?php
include_once('user.php');
echo user::getName();
?>
			</div></a>
		</div>
	</div>
	<div id="content_container">
		<div id="message">
			lorem ipsum...
		</div>
	</div>
</div>
</body>
</html>
