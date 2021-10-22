<?php

declare(strict_types=1);

function setHeight(int $minheight = 50, string $name = "Nam"){
    echo "The height is: $minheight, $name <br>";
}

setHeight(350, "Han");
setHeight();
setHeight(135, "Manh");