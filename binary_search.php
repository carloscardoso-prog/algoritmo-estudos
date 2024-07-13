<?php

  // O(n)
  $array = [1, 3, 5, 7, 9];
  $target = 7;
  
  $menor = 0;
  $maior = count($array)-1;
  
  while(true){
    $chute = floor(($menor + $maior) / 2);
    
    if($array[$chute] == $target) {
      print_r($chute);
      break;
    } 
    
    if($array[$chute] < $target){
      $menor = $chute+1;
      continue;
    }
    
    $maior = $chute-1;
  }