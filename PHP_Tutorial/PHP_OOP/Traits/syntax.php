<?php
// Trong PHP một class con chỉ có thể kế thừa từ một lớp cha duy nhất
// traits giải quyết vấn đề nếu một lớp cần kế thừa nhiều phương thức

// syntax
trait TraitName
{
  // trait có thể có phương thức hoặc phương thức trièu tượng có thể sử dụng cho nhiều, và có thể thay đổi phạm vi truy cập (public, private, protected)
  public function mgs1()
  {
    echo "OOP if fun!";
  }
}

class MyClass
{
  use TraitName;
}

$oop = new MyClass();
$oop->mgs1();