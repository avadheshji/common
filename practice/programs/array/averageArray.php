<?php

/**
 * avarage of sum
 */

 //sum of the array
 function sumOfArray($array){
    $sum=0;
    foreach($array as $value){
       $sum+=$value;
    }
    return $sum;
 }
 //find the average
 function calculateAverage($array){
     if(count($array)>0){
        $sum = sumOfArray($array); 
        //or can use array_sum inbuild function 
        $average = $sum/count($array);
        return $average;
     }else {
         return null;
     }
     
 }
 $array = [10,7,11];
 $total = calculateAverage($array);
 echo $total;




 //using two pointer


function calculateAverage($arr) {
    $left = 0;
    $right = count($arr) - 1;
    $sum = 0;
    $count = 0;

    while ($left <= $right) {
        $sum += $arr[$left];
        $left++;
        $count++;
    }

    $average = $sum / $count;
    return $average;
}

// Example usage:
$array = [1, 2, 3, 4, 5];
$result = calculateAverage($array);
echo "Average: " . $result;

?>