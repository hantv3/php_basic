<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

for($i = 0; $i < count($cars); $i++){
    echo $cars[$i];
    echo "<br>";
}
?>
