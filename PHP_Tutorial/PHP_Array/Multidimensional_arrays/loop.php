<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
);
for($i = 0; $i < count($cars); $i++){
    for($j = 0; $j <= count($cars) - 1; $j++){
        echo $cars[$i][$j];
    }
}
