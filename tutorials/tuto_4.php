<?php

class Animal
{
  public function makeNoise()
  {
    echo "the animal made noise.";
  }
}

class Dog extends Animal
{
  public function makeNoise()
  {
    echo "Ouaf !";
  }
}

class Cat extends Animal
{
  public function makeNoise()
  {
    echo "Miaou !";
  }
}

// Usage :
$animals = [new Dog(), new Cat(), new Animal()];

foreach ($animals as $individualAnimal) {
  $individualAnimal->makeNoise();
  echo "\n";
}
