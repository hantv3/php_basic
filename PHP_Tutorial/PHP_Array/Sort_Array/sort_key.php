<?php
$age = array("Perter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $a => $a_value){
    echo "Key=" . $a . ", Value=" . $a_value;
    echo "<br>";
}
?>