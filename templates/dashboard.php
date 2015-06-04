<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
</head>
<body>
<div id="wrapper">
<?php
$titlebar = new TitleBar();
$titlebar->addButton('signout_button', 'signout', 'signout.php');
#TODO: TEMPORARY, JUST TO MAKE IT WORK
$userImage = '<img id="user_image" src="res/loading.gif"/> ';
$titlebar->addButton('username_button', $userImage . user::getName(), 'profile.php');
$titlebar->addButton('example_button', 'example button', 'href="http://example.com"');
$titlebar->render();
?>
	<div id="content_container">
		<div id="message">
			lorem ipsum...
		</div>
	</div>
</div>
</body>
</html>
