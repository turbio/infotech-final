<?php
include_once('title_bar.php');

////$signbox = $content;

$titlebar = new TitleBar();
$titlebar->setButton('sign_in_button', 'sign in', 'signin.php');
$titlebar->setButton('sign_up_button', 'sign up', 'signup.php');
$titlebar->render();

echo '<div id="content_container">';
$this->template->render($this->templatePath);
echo '</div>';
