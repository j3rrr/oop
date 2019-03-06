<?php
class Cars
{
    public $wheel_count = 4;
    private $door_count  = 4;
    protected $seat_count = 2;

    public function carDetail()
    {
        echo $this->wheel_count . '<br>';
        echo $this->door_count . '<br>';
        echo $this->seat_count . '<br>';
    }
}

$bmw = new Cars();
$bmw->carDetail();
