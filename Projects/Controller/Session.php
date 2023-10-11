<?php
namespace Controller;
class Session
{
    static string $id= '';
    static array $content = [];

    static public function Start():void
    {
        session_start();
        self::$id = session_id();
        self::$content = $_SESSION;
    } 
    static public function getId():string
    {
        return self::$id;
    }
    static public function Get($var)
    {
        return self::$content[$var];
    }
    static public function Set($var,$value=null):void
    {
        self::$content[$var] = $value;
    }
    static public function Save():void
    {
        $_SESSION = self::$content;
    }
    static public function Destroy():void
    {
        self::$id = '';
        self::$content = [];
        session_destroy();
    }
}
?>