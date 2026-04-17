<?php 

function removeDuplicate($array){
    $result[] = $array[0];
    foreach($array as $arr){
        foreach($result as $key => $res){
            if($res != $arr){
                $result[] = $arr;
            }
        }
    }
    return $result;
}
$ranked = [100, 100, 50, 40, 40, 20, 10];
print_r(removeDuplicate($ranked));