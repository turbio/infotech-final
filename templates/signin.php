<?php
echo '<div class="dialog">';
echo '<div class="dialog_title">sign in</div>';
echo '<hr/>';
echo '<div class="dialog_pad">';

if($this->error){
	echo '<div id="fail_box">'.$this->error.'</div>';
}

echo '<form action="signin.php" method="POST">
<input type="text" name="username" placeholder="username" class="field" autofocus/>
<br/>
<input type="password" name="password" placeholder="username" class="field"/>
<br/>
<input type="submit" value="sign in" class="button"/>
</form>';
echo '</div>';
