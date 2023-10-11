<?php
namespace Controller;

class View
{
    static array $vars = [];
    
    // View::Set('h1','Hello world !!!');
    static public function Set(string $var,$value):void
    {
        self::$vars[$var] = $value;
    }

    static public function Get(string $var)
    {
        return self::$vars[$var];
    }

    static public function Display(string $view):void
    {
        require_once(DIR_VIEW.$view.'.php');
    }


}

?>