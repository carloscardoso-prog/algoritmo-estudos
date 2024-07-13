<?php
$array = [3,7,2,5,8,9,1,4,6];

print_r(orderQuicksort($array));

function orderQuicksort($array){
    if(count($array) < 2){
        return $array;
    }
    
    $pivot = $array[0];
    $leftArray = [];
    $rightArray = [];
    
    foreach($array as $data){
        if($pivot > $data){
            $leftArray[] = $data;
        }
        
        if($pivot < $data){
            $rightArray[] = $data;
        }
    }
    
    return array_merge(orderQuicksort($leftArray), [$pivot], orderQuicksort($rightArray));
}
?>