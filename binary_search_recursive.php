<?php

$array = [1,2,3,4,5,6,7,8,9];
$target = 7;

$smaller = 0;
$bigger = count($array)-1;

function searchBinary($array, $smaller, $bigger, $target){
    $guess = floor(($bigger + $smaller)/2);

    if($target == $array[$guess]){
        print_r($array[$guess]);
        die;
    }

    if($target > $array[$guess]){
        $smaller = $guess+1;    
    }

    if($target < $array[$guess]){
        $bigger = $guess-1;
    }

    searchBinary($array, $smaller, $bigger, $target);
}

print_r(searchBinary($array, $smaller, $bigger, $target));