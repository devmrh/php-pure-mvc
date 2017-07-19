<?php

class Hash
{

    private static $salt;


    public static function mkHash($value)
    {
       self::$salt =  sha1(md5($value));
        return md5($value.self::$salt);

    }



}