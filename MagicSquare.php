<?php 
$s = [[5, 3, 4], [1, 5, 8], [6, 4, 2]];
echo formingMagicSquare($s);

function formingMagicSquare($s = null) {
    $magicSquares = [
    [
        [8,1,6],
        [3,5,7],
        [4,9,2]
    ],

    [
        [6,1,8],
        [7,5,3],
        [2,9,4]
    ],

    [
        [4,9,2],
        [3,5,7],
        [8,1,6]
    ],

    [
        [2,9,4],
        [7,5,3],
        [6,1,8]
    ],

    [
        [8,3,4],
        [1,5,9],
        [6,7,2]
    ],

    [
        [4,3,8],
        [9,5,1],
        [2,7,6]
    ],

    [
        [6,7,2],
        [1,5,9],
        [8,3,4]
    ],

    [
        [2,7,6],
        [9,5,1],
        [4,3,8]
    ]

];
    // take a variable with cost and min_cost
    $min_cost = 0;
   for($i=0; $i < count($magicSquares); $i++){
    $cost = 0;
    for($j=0; $j < 3; $j++){
        for($k=0; $k < 3; $k++){
            $cost += abs($magicSquares[$i][$j][$k] - $s[$j][$k]);
        }
    }
    if($cost < $min_cost){
        $min_cost = $cost;
    }
   }

   return $min_cost;
}