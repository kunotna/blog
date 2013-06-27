<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_Template {
    
    public $template = 'public/base';

    public function action_index()
	{
		$this->template->title = 'hello, Public!';
	}

} // End Welcome
