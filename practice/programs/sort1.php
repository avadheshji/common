<?php

/**
 * 1.Sort an array without using any sorting function in PHP
 *  Example $array = array(1, 6, 23, 10, 3, 2, 15,7); make this array Descending order without using any inbuilt function.
 */



 $array=[1, 6, 23, 10, 3, 2, 15,7];
 $total = count($array);

 for($i=0; $i<$total; $i++) {
    for($j=$i+1; $j<$total; $j++){
        if($array[$i] < $array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
 }
 echo '<pre>';
 echo "Descending Sorted Array is: "; 
 print_r($array);



/**
 * 2.Sort an array without using any sorting function in PHP
 *  Example $array = array(1, 6, 23, 10, 3, 2, 15,7); make this array ascending order without using any inbuilt function.
 */



 $array=[1, 6, 23, 10, 3, 2, 15,7];
 $total = count($array);
 for($i=0; $i<$total; $i++) {
    for($j=$i+1; $j<$total; $j++){
        if($array[$i] > $array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
 }
 echo '<pre>';
 echo "Ascending Sorted Array is: "; 
 print_r($array);



 /**
 * 3.Find the smallest number in an array without using any function.
 *  Example  $array =array(2,7,10,25,35,65,80); make this array ascending order without using any inbuilt function.
 *  Find the minimum array value $array = array(2,7,10,25,35,65,80);
 */
$array = [2,7,10,25,35,65,80];
$total = count($array);
$min = $array[0];

for($i=0; $i<$total; $i++){
    if($array[$i] < $min){
        $min = $array[$i];
    }
}
echo "minmum value $min";


 /**
 * 3.Find the  smallest and largest number in an array without using any function.
 *  Example $array =array(2,7,10,25,35,65,80); make this array ascending order without using any inbuilt function.
 *  Find the minimum array value $array = array(2,7,10,25,35,65,80);
 */

$array = [3,7,10,25,35,65,80];
$total = count($array);
$num = $array[0];
$max = $array[0];
for($i=0; $i<$total; $i++){
    if($array[$i] < $num){
        $num = $array[$i];
    }
    if($array[$i] > $max){
        $max = $array[$i];
    }

}
echo "minmum value $num" . "\n";
echo "maximum value $max";







?>



