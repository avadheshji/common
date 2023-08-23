<?php
function findThirdLargest($numbers) {
    $length = count($numbers);
    if ($length < 3) {
        return "Array should have at least three elements";
    }
    $first = $second = $third = PHP_INT_MIN;
    foreach ($numbers as $number) {
        if ($number > $first) {
            $third = $second;
            $second = $first;
            $first = $number;
        } elseif ($number > $second && $number < $first) {
            $third = $second;
            $second = $number;
        } elseif ($number > $third && $number < $second) {
            $third = $number;
        }
    }
    return $third;
}
// Define the array
$numbers = [10, 5, 8, 3, 12, 7];
// Find the third largest number
$thirdLargest = findThirdLargest($numbers);
// Output the third largest number
echo "The third largest number is: " . $thirdLargest;






//second largest number


function findSecondLargest($numbers) {
    $length = count($numbers);

    if ($length < 2) {
        return "Array should have at least two elements";
    }
    $first = $second = PHP_INT_MIN;
    foreach ($numbers as $number) {
        if ($number > $first) {
            $second = $first;
            $first = $number;
        } elseif ($number > $second && $number < $first) {
            $second = $number;
        }
    }
    return $second;
}
// Define the array
$numbers = [10, 5, 8, 3, 12, 7];

// Find the second largest number
$secondLargest = findSecondLargest($numbers);

// Output the second largest number
echo "The second largest number is: " . $secondLargest;

?>