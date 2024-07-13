<?php
$array = [1,2,3,4,5,6,7,8,4,6,1,4,67,6,2,45,7,4,3];

function findHighestNumber($array, $index, $lastBiggestValue){
    if(count($array)-1 == $index){
        return $lastBiggestValue;
    }

    $lastBiggestValue = ($lastBiggestValue < $array[$index])? $array[$index] : $lastBiggestValue;

    findHighestNumber($array, $index+1, $lastBiggestValue);
}

print_r(findHighestNumber($array, 0, -1));