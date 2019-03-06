<?php
class Cars
{
    public static $wheel_count = 4;
    public static $door_count  = 4;
    public static $seat_count = 2;

    public static function carDetail()
    {
        echo Cars::$wheel_count . '<br>';
        echo Cars::$door_count . '<br>';
        echo Cars::$seat_count . '<br>';
    }
}

$bmw = new Cars();
// echo $bmw->door_count; // Error
echo Cars::$door_count . '<br>'; // Kein Error
Cars::carDetail();
