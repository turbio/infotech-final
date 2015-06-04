<?php
include_once('debug.php');
include_once('View.php');

class TitleBar{
	private $buttons = array();

	function setButton($content, $attr = ""){
		$this->buttons[$content] = $attr;
	}

	function removeButton($button){
		unset($button);
	}

	function render(){
		$template = new View();
		$template->buttons = $this->buttons;
		$template->render('title_bar.php');
	}
}

