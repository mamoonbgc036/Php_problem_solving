<?php 

function removeDuplicate($array){
    $uniqueArray = [];
    foreach($array as $arr){
        $found = false;
        foreach($uniqueArray as $key => $res){
            if($res == $arr){
                $found = true;
            }
        }
        if(!$found){
            $uniqueArray[] = $arr;
        }
    }
    return $uniqueArray;
}
$ranked = [100, 100, 50, 40, 40, 20, 10];
print_r(removeDuplicate($ranked));