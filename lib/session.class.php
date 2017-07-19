<?php

class Session {

    protected static $flash_massege;

    public static function setFlash($message){
        self::$flash_massege = $message;

    }

    public static function hasFlash(){

        return !is_null(self::$flash_massege);
    }

    public static function flash(){

        echo self::$flash_massege;
        self::$flash_massege = null;
    }

    public static function set($key, $value){
        $_SESSION[$key] = $value;

    }

    public static function get($key){
        if (isset($_SESSION[$key]) ){
            return $_SESSION[$key];
        }else{
            return null;
        }
    }

    public static function delete($key){
        if (isset($_SESSION[$key]) ){
            unset($_SESSION[$key]);
        }
    }

    public static function destroy(){
        session_destroy();
    }
}