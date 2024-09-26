<?php
class Animal
{
  public $name;
  public $age;

  // Constructor for Animal class
  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  public function eat()
  {
    echo "I'm eating.\n";
  }
}

class Cat extends Animal
{
  public $breed;

  public function __construct($name, $age, $breed)
  {
    parent::__construct($name, $age);
    $this->breed = $breed;
  }

  public function meow()
  {
    echo "Miaou!\n";
  }
}

class Dog extends Animal
{
  public function makeNoise()
  {
    echo "Ouaf!\n";
  }
}

$myCat = new Cat();
$myCat->meow();
$myCat->eat();

$myDog = new Dog();
$myDog->makeNoise();
$myDog->eat();
