<?php
// Abstract trong PHP la mot calss chua mot phuong thuc abstract. Mot phuong thuc Abstract khi duoc khoi tao se khong chay code ben trong no.
// Parent class
abstract class Car {
  protected $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  abstract public function intro() : string;
}

// child classes
class Audi extends Car {
  public function intro() : string {
    return "Choose German quality! I'm an $this->name!";
  }
}

$audi = new Audi("Audi");
echo $audi->intro();
?>