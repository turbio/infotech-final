<div id="splashbar">
	<a href="index.php"><div id="logo_container" class="splashbar_button">
		<div id="logo_icon_container">
			<object type="image/svg+xml" data="res/logo.svg" id="logo">logo</object>
		</div>
		<div id="logo_text">title?</div>
	</div></a>
	<div id="right_button_container">
<?php
foreach(array_reverse($this->buttons) as $key => $value){
	echo '<a '.$value.'>';
	echo '<div class="splashbar_button">'.$key.'</div></a>';
}
?>
	</div>
</div>
<!--<div class="popup" id="account_popup">-->
<!--	<img src="res/loading.gif"/>-->
<!--</div>-->