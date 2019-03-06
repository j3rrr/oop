<?php
class Cars
{
    public $wheel_count = 4;
    public static $door_count = 2;

    public function __construct()
    {
        echo $this->wheel_count;
        echo self::$door_count++;
        echo "<br>";
    }

    public function __destruct()
    {
        echo self::$door_count--;
        echo "<br>";
    }
}

$bmw = new Cars();
$mercedes = new Cars();
$vw = new Cars();
