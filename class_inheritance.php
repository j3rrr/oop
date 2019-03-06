<?php
class Cars
{
    public $wheel_count = 4;
    public $door_count  = 4;

    public function carDetail()
    {
        return "This car has " . $this->wheel_count . " wheels";
    }
}
class Trucks extends Cars
{
    public $wheel_count = 10;
}

$bmw = new Cars();
$man = new Trucks();

echo $man->carDetail();
