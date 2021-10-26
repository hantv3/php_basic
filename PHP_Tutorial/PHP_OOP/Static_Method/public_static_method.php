<?php
class greeting
{
  public static function welcome()
  {
    echo "Hello World";
  }
}

class SomeOtheClass
{
  public function message()
  {
    greeting::welcome();
  }
}

$oop = new SomeOtheClass();
$oop->message();