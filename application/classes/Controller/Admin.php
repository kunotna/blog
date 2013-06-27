<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public function action_index()
	{
		$this->response->body('hello, guest!');
	}

} // End Welcome
