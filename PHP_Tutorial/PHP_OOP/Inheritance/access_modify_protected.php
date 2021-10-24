<?php
class Fruit
{
    private $name;
    private $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
class Strawberry extends Fruit 
{
    public function message()
    {
        echo "Am I a fruit or berry?";
        $this->intro();
    }
}

$strawberry = new Strawberry("Dâu đen", "Đen");
$strawberry->message();
echo "<br>";
$strawberry->intro();
?>