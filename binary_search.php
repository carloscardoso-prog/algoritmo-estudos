<?php
  $array = [1, 3, 5, 7, 9];
  $target = 7;
  
  $menor = 0;
  $maior = count($array);
  
  while(true){
    $chute = round(($menor + $maior) / 2);
    
    if($chute == $target) {
      print_r(array_search($chute, $array));
      break;
    } 
    
    if($chute < $target){
      $menor = $array[$menor+1];
      continue;
    }
    
    $maior = $array[$maior-1];
  }
?>