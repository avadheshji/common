<?php


/**
 *Sum of the array
 */


 function sumOfArray($array){
    $sum=0;
    foreach($array as $value){
       $sum+=$value;
    }
    return $sum;
 }
 $array = [10,9,7,11];
 $total = sumOfArray($array);
 echo $total;