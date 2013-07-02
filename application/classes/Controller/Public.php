<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_Base {
    
    public $template = 'public/base';

    public function before() {
        parent::before();
        
        $this->template->title = 'hello, Public!';
    }
    
    public function action_index(){
        
    }

} // End Welcome
