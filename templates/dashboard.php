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
$titlebar->button('logout', 'href="logout.php" id="logout_button"');
$titlebar->button(user::getName(), 'href="profile.php" id="username_button"');
$titlebar->button('example button', 'href="http://example.com"');
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
