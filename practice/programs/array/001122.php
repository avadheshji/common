<?php

function sortArray(&$arr){
    $left = 0;
    $right = count($arr)-1;
    $mid =0;
    while($mid<$right){
       if($arr[$mid]== 0){
           list($arr[$mid], $arr[$left]) = [$arr[$left], $arr[$mid]];
           $left++;
           $mid++;
       }else if($arr[$mid]==1){
           $mid++;
       }else if($arr[$mid]==2){
        list($arr[$mid], $arr[$right]) = [$arr[$right], $arr[$mid]];
           $right--;
       }
    }
}

$array = array(0, 1, 0, 0,2,2, 1, 1);
 sortArray($array);
echo "Sorted Array: " . implode(", ", $array);
?>