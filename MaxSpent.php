<?php 

function getMoneySpent($keyboard, $drivers, $b){
    $maxSpent = -1;
    foreach($keyboard as $key){
        foreach($drivers as $driver){
            $combinedTotal = $key + $driver;
            if($combinedTotal > $maxSpent && $combinedTotal <= $b){
                $maxSpent = $combinedTotal;
            }
        }
    }
    return $maxSpent;
}

echo getMoneySpent([3, 1], [5, 2, 8], 10);