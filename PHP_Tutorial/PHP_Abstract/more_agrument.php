<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name, $separator = ".", $greet = "Dear"){
    if($name == "John Doe"){
      $prefix = "Mr.";
    }else if($name == "Jane Doe") {
      $prefix = "Mrs.";
    }else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
?>