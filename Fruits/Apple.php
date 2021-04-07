<?php

require_once __DIR__ . '/../AbstractClass/Fruit.php';

class Apple extends Fruit
{
  public function howToEat()
  {
    return "Apple could be slided";
  }
}
