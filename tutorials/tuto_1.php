<?php
class Car
{
  public $marque;
  public $model;
  public $color;

  public function start_up()
  {
    echo "the car is start up.";
  }
}

$myCar = new Car();
$myCar->marque = "Renault";
$myCar->model = "Clio";
$myCar->color = "Blue";

$myCar->start_up();
