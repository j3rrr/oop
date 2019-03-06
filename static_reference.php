<?php
class Cars
{
    public static $wheel_count = 4;
    public static $door_count  = 3;

    public static function carDetail()
    {
        return self::$wheel_count . '<br>';
        return self::$door_count . '<br>';
    }
}

class Trucks extends Cars
{
    public static function display()
    {
        echo parent::carDetail();
    }
}


Trucks::display();
