<?php
$array = [2, 3, 7, 8, 10];

function setFactorial($array)
{
    $arrayReturn = [];
    for ($i = 0; $i < count($array); $i++) {
        $arrayReturn[$i] = $array[$i];
        for ($j = 0; $j < count($array); $j++) {
            $arrayReturn[$i] = $arrayReturn[$i] * $array[$j];
        }
    }

    return $arrayReturn;
}

print_r(setFactorial($array));
