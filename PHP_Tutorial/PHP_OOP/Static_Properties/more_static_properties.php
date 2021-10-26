<?php
class pi
{
  public static $pi = 3.14159;
  public function staticValue()
  {
    return self::$pi;
  }
}

$pi = new pi();

echo $pi->staticValue();