<?php
// Mot phuong thuc tinh co the truy cap tu mot phuong thuc trong lop su dung self
class greeting
{
  public static function welcome()
  {
    echo "Hello World";
  }

  public function __construct()
  {
    self::welcome();
  }
}

new greeting();