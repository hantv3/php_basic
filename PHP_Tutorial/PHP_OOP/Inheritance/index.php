<?php
# kế thừa từ lớp cha sang lớp con sẽ sử dụng keyword extends
class Fruit
{
    private $name;
    private $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
class Strawberry extends Fruit 
{
    public function message()
    {
        echo "Am I a fruit or berry?";
    }
}

$strawberry = new Strawberry("Dâu đen", "Đen");
$strawberry->message();
echo "<br>";
$strawberry->intro();
?>