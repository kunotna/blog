<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Auth extends Controller_Public {
    
    //public $template = 'public/auth/auth_index';
    public $template = 'admin/base';
    
    public function action_auth() {
        /*$user = array(
            'username' => 'admin',
            'password' => '1111',
            'email' => 'test@example.com'
        );
        ORM::factory('User')->values($user, array_keys($user))->create();*/
        
        $this->template->styles = array(
            '/media/css/bootstrap.min.css'            => array(),
            '/media/css/bootstrap-responsive.min.css' => array(),
            '/media/css/unicorn.login.css'            => array(),
        );
        
        $this->template->scripts = array(
            '/media/js/jquery.min.js',
            '/media/js/unicorn.login.js',
        );
        
        if (Auth::instance()->logged_in('admin')) {
            HTTP::redirect('admin');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('login', 'password'));

            $status = Auth::instance()->login($data['login'], $data['password']);

            if ($status) {
                if (Auth::instance()->logged_in('admin')) {
                    HTTP::redirect('admin');
                }
            } else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
                //var_dump($errors);exit;
            }
        }

        $content = View::factory('public/auth/auth_index')
                ->bind('errors', $errors);
                /*->bind('data', $data);*/

        // Выводим в шаблон
        $this->template->content = $content;
        /*$this->template->block_center = array($content);
        $this->template->scripts[] = 'media/js/sha1.js';
        $this->template->scripts[] = 'media/js/jquery-1.6.2.min.js';*/
    }
    
    public function action_logout() {
        if (Auth::instance()->logout()) {
            HTTP::redirect();
        }
    }

}
