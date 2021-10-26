<?php
class pi
{
  public static $pi = 3.14159;
}
class x extends pi
{
  public function staticValue()
  {
    return parent::$pi;
  }
}

echo x::$pi;