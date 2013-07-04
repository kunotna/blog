<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Auth extends Controller_Public {
    
    public $template = 'public/auth';
    
    public function action_login() {
        /*$user = array(
            'username' => 'admin',
            'password' => '1111',
            'email' => 'test@example.com'
        );
        ORM::factory('User')->values($user, array_keys($user))->create();*/
        
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
                //TODO:: правила валідації для логіна і пароля
                $errors = array(Kohana::message('auth/user', 'no_user'));
                //var_dump($errors);exit;
            }
        }

        /*$content = View::factory('index/auth/v_auth_login')
                ->bind('errors', $errors)
                ->bind('data', $data);*/

        // Выводим в шаблон
        /*$this->template->page_title = 'Вход';
        $this->template->block_left = null;
        $this->template->block_center = array($content);
        $this->template->scripts[] = 'media/js/sha1.js';
        $this->template->scripts[] = 'media/js/jquery-1.6.2.min.js';*/
    }
    
    public function action_logout() {
        if (Auth::instance()->logout()) {
            HTTP::redirect();
        }
    }

}
