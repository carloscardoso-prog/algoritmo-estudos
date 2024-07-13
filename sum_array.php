<?php
$array = [1,2,3,4,5,6,7,8,9,10];

function sum($array){
    if(count($array) == 1){
        return $array[0];
    }
    $uniqueValue = array_shift($array);
    
    return $uniqueValue + sum($array);
}

print_r(sum($array));