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

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count = 10;
echo '<br>';
echo $mercedes->wheel_count;
echo '<br>';
echo $bmw->carDetail();
echo '<br>';
echo $mercedes->carDetail();
