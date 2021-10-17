<?php
// Khai báo kiểu trả về của hàm

declare(strict_types=1);

function addNumber(float $a, float $b) : float{
    return $a + $b;
}

echo addNumber(2.3, 3.4);