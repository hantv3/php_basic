<?php
$cars = array("Volvo"=>"15", "BMW"=>"35", "Toyota"=>"54");
asort($cars);
foreach($cars as $c =>$c_value){
    echo "Key=" . $c . ", Value=" . $c_value;
    echo "<br>";
}
?>