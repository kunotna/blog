<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Base {
    
    public $template = 'admin/base';
    
	public function before() {
        parent::before();
        
        // Перевіряєм, чи має користувач адмін-доступ, в тому числі до даного методу
		if ( ! Auth::instance()->logged_in('admin'))
		{
			HTTP::redirect('auth');
		}
        
        $this->template->title = 'Unicorn Admin';
    }
    
    //public function action_index(){}

}
