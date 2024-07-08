<?php

//O(n^2)
// bruteforce

function containsDuplicateBruteforce($nums)
{
    foreach ($nums as $keyNum => $num) {
        foreach ($nums as $keySecNum => $secNum) {
            if ($keySecNum == $keyNum) {
                continue;
            }

            if ($num == $secNum) {
                return true;
            }
        }
    }
    return false;
}

//O(n)
// hashmap

function containsDuplicateHashmap($nums) {
    $map = [];
    foreach($nums as $num){
        if(isset($map[$num])){
            return true;
        }

        $map[$num] = $num;
    }

    return false;
}

//O(n)
// small range of integers

function containsDuplicateSmallRange($nums){
    $map = [];
    for($i = 0; $i < count($nums); $i++){
        $map[$i] = 0;
    }

    foreach($nums as $num){
        if($map[$num] == 1){
            return true;
        }

        $map[$num] = 1;
    }

    return false;
}

// size comparison
//O(n)
function containsDuplicateSizeComparison($nums){
    return count(array_unique($nums)) != count($nums);
}

// containsDuplicate([1,2,3,4]);