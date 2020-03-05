<?php


class MyStatic
{

    public static $name = 'John';

    public static function printName(){
        echo self::$name;
    }

    /*
    public static $name = 'John';
    public $firstName = "Jorshua";
    const Name = 'das';

    public static function action($name){
        //echo __METHOD__;
        echo "Hello {$name}";
    }*/

    /*
    public static $name = 'John';
    public function __construct(){
        //MyStatic::$name = 'Bob';
        self::$name = 'Bob';
    }*/
}