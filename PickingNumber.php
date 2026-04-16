<?php 

function PickingNumber($a){
    $count = array_count_values($a);
    $max = 0;

    foreach ($count as $num => $freq) {
        $next = isset($count[$num + 1]) ? $count[$num + 1] : 0;
        $max = max($max, $freq + $next);
    }

    return $max;
}