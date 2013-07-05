<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Chief class from admin panel
 */
class Controller_Admin_Main extends Controller_Admin {

    public function action_index() {
        
        // connect styles
        $this->template->styles = array(
            '/media/css/bootstrap.min.css'            => array(),
            '/media/css/bootstrap-responsive.min.css' => array(),
            '/media/css/fullcalendar.css'             => array(),
            '/media/css/unicorn.main.css'             => array(),
            '/media/css/unicorn.grey.css'             => array(
                'class' => 'skin-color',
            ),
        );
        
        $this->template->scripts = array(
            '/media/js/excanvas.min.js',
            '/media/js/jquery.min.js',
            '/media/js/jquery.ui.custom.js',
            '/media/js/bootstrap.min.js',
            '/media/js/jquery.flot.min.js',
            '/media/js/jquery.flot.resize.min.js',
            '/media/js/jquery.peity.min.js',
            '/media/js/fullcalendar.min.js',
            '/media/js/unicorn.js',
            '/media/js/unicorn.dashboard.js',
        );
        
        $this->template->title = $this->template->title . ' | главная';
        
        $content = View::factory('admin/main/main_index');
        
        $this->template->content = $content;
    }

}