<?php

class UsersController extends Controller
{

    public function __construct(array $data = array())
    {
        parent::__construct($data);

        $this->model = new User();
    }

    public function admin_login()
    {

        if ($_POST && isset($_POST['username']) && isset($_POST['password'])) {
            $user = $this->model->getByLogin($_POST['username']);
            $hash = Hash::mkHash($_POST['password']);
            if ($user && $user['is_active'] && $hash == $user['password']) {
                Session::set('username', Hash::mkHash($user['username']));
                Session::set('role', Hash::mkHash($user['role']));
                if (!isset($_SESSION['csrf_token'])) {
                    $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
                }
                Cookie::setCookie('lg1', Hash::mkHash($user['username']), 1);
                Cookie::setCookie('lr1', Hash::mkHash($user['role']), 1);


            }
            Router::redirect('/admin/pages');
        }
    }

    public function admin_logout()
    {
        //$params = App::getRouter()->getParams();
        //   $params[0] = substr($params[0], 5);
        //    $f_params = implode('/', $params);
        //   $f_params_f = str_replace(' ', '+', $f_params);

             session_destroy();
//
//            Cookie::setCookie('test','test',-1);

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time() - 1000);
                setcookie($name, '', time() - 1000, '/');
            }
        }
//
            Router::redirect('/admin');


    }


    public function signup()
    {
        if ($_POST) {

            if ($this->model->save($_POST)) {
                Session::setFlash('your change was saved successfully');

            }
        }

    }

}