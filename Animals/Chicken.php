<?php
require_once __DIR__ . '/../AbstractClass/Animal.php';
require_once __DIR__ . '/../InterfaceClass/Edible.php';

class Chicken extends Animal implements Edible
{
  public function makeSound()
  {
    return "Chicken: cluck-cluck!";
  }

  public function howToEat()
  {
    return "could be fried";
  }
}
