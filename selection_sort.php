<?php
$nums = [0,1,2,0,2,1,5,3,7,4];
// change the array to whatever value you desire.
processArray($nums, count($nums), 0);
     function processArray(&$nums, $lenght, $pointer) {
        if($pointer == $lenght-1) {
            print_r($nums);
            die;
        }

        for($i = $pointer; $i < $lenght; $i++) {
            if($nums[$pointer] > $nums[$i]){
                $biggerValue = $nums[$pointer];
                $smallerValue = $nums[$i];

                $nums[$pointer] = $smallerValue;
                $nums[$i] = $biggerValue;
            }
        }
        
        processArray($nums, $lenght, $pointer+1);
    }
?>