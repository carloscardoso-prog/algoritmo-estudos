<?php
$array = [1,2,3,4,5,6,7,8,4,6,1,4,67,6,2,45,7,4,3];

function countNumbersArray($array, $index){
    if(!isset($array[0])){
        return $index;
    }
    array_pop($array);

    return countNumbersArray($array, $index+1);
}

print_r(countNumbersArray($array, 0));