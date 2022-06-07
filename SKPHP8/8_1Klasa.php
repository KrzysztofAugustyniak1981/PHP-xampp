<?php

class Vehicle
{
    private $brand;
    public $color;

    public function drive()
    {
        return 'Jedziemy ...';
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }
}

$car = new Vehicle();
//$car->brand = 'Renault';
//$car->color = 'Black';

//echo $car->brand;
$car->setBrand('Renault');
//echo $car->drive();
echo $car->getBrand();

$bike = new Vehicle();
//$bike->brand = 'Romet';
//$bike->color = 'Silver';

//echo $bike->brand;