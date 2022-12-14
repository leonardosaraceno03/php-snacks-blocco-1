<?php

$numberArray = [];

$varSold = 0;

for($i=0; count($numberArray) < 15; $i++){
   $num = rand(1, 100);
   if($num != $varSold){
    array_push($numberArray, $num);
    $varSold == $num;
   }else{
    $i--;
   }
}



for($i = 0; $i < count($numberArray); $i++){
    echo $numberArray[$i];
    echo '<br/>';
    echo '<br/>';
}
?>