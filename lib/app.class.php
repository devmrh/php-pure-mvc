<?php

class App
{

    protected static $router;

    public static $db;


    /**
     * @return mixed
     */
    public static function getRouter()
    {
        return self::$router;
    }

    public static function run($url)
    {

        self::$router = new Router($url);
        self::$db = new DB(Config::get('db.host'), Config::get('db.user'), Config::get('db.password'));

        Lang::load(self::$router->getLanguage());
        $controller_class = ucfirst(self::$router->getController()) . 'Controller';
        $controller_method = strtolower(self::$router->getMethodPrefix() . self::$router->getAction());


        $layout = self::$router->getRoute();


        if (Cookie::getCoockie('lg1')) {


            if (!isset($_SESSION['username'])) {
                Session::set('username', $_COOKIE['lg1']);

            }

            if (!isset($_SESSION['role'])) {
                Session::set('role', $_COOKIE['lr1']);

            }


            // Router::redirect("/admin/pages");
            //
            //

        }


        if ($layout == 'admin' && Session::get('role') != Hash::mkHash('admin') ) {

            if ($controller_method != 'admin_login') {
                Router::redirect("/admin/users/login");
            }
        }


        //calling controllers methods

        $controller_object = new $controller_class();
        if (method_exists($controller_object, $controller_method)) {

            //controller's action may return a view path

            $view_path = $controller_object->$controller_method();
            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();
        } else {
            //  throw new Exception(' method ' . $controller_method . ' of ' . $controller_class . ' not exist');
            echo "404";
        }


        $layout_path = VIEWS_PATH . DS . $layout . '.php';
        $layout_view_object = new View(compact('content'), $layout_path);
        echo $layout_view_object->render();

    }
}

// HACKING . . . 60% PLEASE BE PATIENT . . .