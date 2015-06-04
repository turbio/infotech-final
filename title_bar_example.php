<?php
include_once('title_bar.php');

$title_bar = new TitleBar();
$title_bar->addButton('test_button', 'the button\'s text');
$title_bar->addButton('test_button1', 'the button\'s text', 'http://google.com');
$title_bar->render();
