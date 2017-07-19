<?php

class Cookie
{

    protected static $name = null;
    protected static $value = null;
    protected static $time = null;
    private static $exception = "unknown error";


    private function setExpirationDate($day)
    {
        self::$time = time() + ($day * 24 * 60 * 60);
    }

    public static function setCookie($name, $value, $day)
    {
        self::$name = $name;
        self::$value = $value;
        self::setExpirationDate($day);


        if (!setcookie(self::$name, self::$value, self::$time)) {
            throw new Exception(self::$exception);
        } else {
           return setcookie(self::$name, self::$value, self::$time);
        }


    }

    public static function getCoockie($name)
    {
        if (isset($_COOKIE[$name])) {
            return true;
        } else {
            return false;
        }
    }
}




