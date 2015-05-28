<link rel="stylesheet" type="text/css" href="style.css">
<?php
echo '<div class="dialog">';
echo '<div class="dialog_title">login</div>';
echo '<hr/>';
echo '<div class="dialog_pad">';

echo '<div id="fail_box">your login credidentials were incorrect.</div>';

echo '<form action="login.php" method="POST">
		<input type="text" name="username" placeholder="username" class="field">
		<br/>
		<input type="password" name="password" placeholder="password" class="field">
		<br/>
		<input type="submit" value="login" class="button">
	</form>';
echo '</div>';

?>
