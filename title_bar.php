<?php
include_once('debug.php');
include_once('View.php');

class TitleBar{
	private $buttons = array();
	private $title = '';

	function setTtitle($title){
		$this->title = $title;
	}

	function setButton($id, $content, $href='#'){
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
		$template->title = $this->title;
		$template->render('title_bar.php');
	}
}

class Button{
	public $content;
	public $href;
	public $id;
}
