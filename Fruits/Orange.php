<?php

require_once __DIR__ . '/../AbstractClass/Fruit.php';

class Orange extends Fruit {
  public function howToEat()
  {
    return "Orange could be juiced";
  }
}