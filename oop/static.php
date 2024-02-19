<?php

include_once "includes/autoloader.php";

class MyStatic
{
    public static $count = 0;

    public static function getCount()
    {
        return self::$count;
    }
}
echo MyStatic::$count;
// $myStaticObject = new MyStatic();
// echo $myStaticObject->getCount();

$test = new Index();
$bmw = new Cars\Car();
