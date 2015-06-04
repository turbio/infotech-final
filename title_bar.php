<?php
include_once('debug.php');
include_once('View.php');

class TitleBar{
	private $buttons = array();

	function addButton($id, $content, $href='#'){
		$button = new Button();
		$button->content = $content;
		$button->id = $id;
		$button->href = $href;

		$this->buttons[$id] = $button;
	}

	function removeButton($id){
		throw new Exception("not implemented");
	}

	function render(){
		$template = new View();
		$template->buttons = $this->buttons;
		$template->render('title_bar.php');
	}
}

class Button{
	public $content;
	public $href;
	public $id;
}
