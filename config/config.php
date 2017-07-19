<?php
error_reporting(0);
?>
<?php

Config::set('site_name', 'best site');

Config::set('languages', array('fa', 'en'));



//Routes. Routes name => method_prefix

Config::set('routes', array(
    'default' => '',
    'admin' => 'admin_'

));

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'posts');
Config::set('default_action', 'index');


Config::set('db.host','mysql:host=localhost;dbname=mvc');
Config::set('db.user','root');
Config::set('db.password', 'root');

Config::set('salt','s)a324y%t@yuguy#TgGH@t!');// its deparcerted by me due using Hash class
