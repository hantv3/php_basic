<?php
class Fruit{
    // Properties
    public $name;
    // Method
    function set_name($name){
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    } 
}
$apple = new Fruit();
$apple->set_name("Apple");
echo $apple->get_name();
?>