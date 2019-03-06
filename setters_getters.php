<?php
class Cars
{
    private $door_count  = 4;

    public function getValues()
    {
        echo $this->door_count . '<br>';
    }
    public function setValues()
    {
        $this->door_count = 10;
    }
}

$bmw = new Cars();

$bmw->getValues();
$bmw->setValues();
$bmw->getValues();
