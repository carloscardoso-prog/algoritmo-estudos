<?php
  function tower_of_hanoi($rings, $source, $auxiliary, $target){
    if($rings == 1){
      print_r("{$rings} went from {$source} to {$target}\n");
      return true;
    }
    
    tower_of_hanoi($rings-1, $source, $target, $auxiliary);
    print_r("{$rings} went from {$source} to {$target}\n");
    tower_of_hanoi($rings-1, $auxiliary, $source, $target);
  }
  
  
  tower_of_hanoi(3, "A", "B", "C");
?>