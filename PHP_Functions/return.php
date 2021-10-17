<?php
declare(strict_types=1);

function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10);