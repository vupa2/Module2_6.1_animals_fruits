<?php
require_once __DIR__ . '/../AbstractClass/Animal.php';

class Tiger extends Animal
{
  public function makeSound()
  {
    return "Tiger: roarrrrr!";
  }
}
