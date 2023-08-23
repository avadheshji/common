<?php

function sortArray(&$arr){
    $left = 0;
    $right = count($arr)-1;
    while($left<$right){
        while($arr[$left] == 0 && $left < $right){
            $left++;
        }
       while($arr[$right] == 1 && $left < $right){
            $right--;
        }
        if($left < $right){
            $arr[$left] = 0;
            $arr[$right] = 1;
            $left++;
            $right--;
        }
    }
}

$array = array(0, 1, 0, 1, 1, 1);
 sortArray($array);
echo "Sorted Array: " . implode(", ", $array);
?>




1 / 2

To segregate 0s and 1s in an array using the two-pointer technique, you can use a similar approach as in the Dutch National Flag problem. Here's an example implementation in PHP:

php
Copy code
function segregateZerosOnes(&$arr) {
    $left = 0; // Pointer for 0s
    $right = count($arr) - 1; // Pointer for 1s

    while ($left < $right) {
        while ($arr[$left] === 0 && $left < $right) {
            $left++;
        }
        while ($arr[$right] === 1 && $left < $right) {
            $right--;
        }

        if ($left < $right) {
            // Swap arr[left] and arr[right]
            list($arr[$left], $arr[$right]) = [$arr[$right], $arr[$left]];
            $left++;
            $right--;
        }
    }
}

Segregated Array: 0, 0, 0, 1, 1, 1
In this implementation, we use two pointers: $left and $right. The $left pointer keeps track of the boundary for 0s, and the $right pointer keeps track of the boundary for 1s.

We iterate over the array while the $left pointer is less than the $right pointer. We move the $left pointer to the right until we encounter a non-zero element. Similarly, we move the $right pointer to the left until we encounter a non-one element.

If the $left pointer is still less than the $right pointer, we have found a zero followed by a one. In this case, we swap the elements at the $left and $right pointers and increment the $left pointer and decrement the $right pointer.

After the iteration, the array will be segregated with all 0s on the left and all 1s on the right, maintaining the relative order of the elements within each group.