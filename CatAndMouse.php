<?php 

function catAndMouse($x, $y, $z) {
    $distA = abs($x - $z);
    $distB = abs($y - $z);

    if ($distA < $distB) {
        return "Cat A";
    } elseif ($distB < $distA) {
        return "Cat B";
    } else {
        return "Mouse C";
    }
}

echo catAndMouse(1,3,2);