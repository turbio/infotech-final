<div id="splashbar">
	<a href="index.php"><div id="logo_container" class="splashbar_button">
		<div id="logo_icon_container">
			<img src="res/logo.svg"/>
		</div>
		<div id="logo_text" title="Main Page"><?php echo $this->title; ?></div>
	</div></a>
	<div id="right_button_container">
<?php
foreach(array_reverse($this->buttons) as $button){
	echo '<a href="'.$button->href.'" id="'.$button->id.'_link">';
	echo '<div id="'.$button->id.'" class="splashbar_button">'.$button->content.'</div></a>';
}
?>
	</div>
</div>
<!--<div class="popup" id="account_popup">-->
<!--	<img src="res/loading.gif"/>-->
<!--</div>-->
