<?php

$array = [1,2,3,4,5,6,7,8,9];

function searchBinary($array, $target){
    if($array[0] == $target){
        return $array[0];
    }
    $arraySize = round(count($array)/2);
    if($arraySize > $target){
        $array = array_slice($array, $arraySize);
    }

    if($arraySize < $target){
        $array = array_slice($array, 0, $arraySize);
    }

    searchBinary($array, $target);
}

print_r(searchBinary($array, 3));