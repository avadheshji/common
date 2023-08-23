<?php
/**
 * sum of two indices matched then return index 
 * using foreach 
 */
function findTwoSumIndices($nums, $target) {
    $seen = [];
    foreach ($nums as $index => $num) {
        $complement = $target - $num;
        if (isset($seen[$complement])) {
            return [$seen[$complement], $index];
        }
        $seen[$num] = $index;
    }
    return [];
}

// Test case
$nums = [7, 2, 13, 11];
$target = 9;

// Best-case scenario
$result = findTwoSumIndices($nums, $target);
if (!empty($result)) {
    echo "Indices: [" . $result[0] . ", " . $result[1] . "]\n";
} else {
    echo "No indices found.\n";
}

// Worst-case scenario
$target = 99;
$result = findTwoSumIndices($nums, $target);
if (!empty($result)) {
    echo "Indices: [" . $result[0] . ", " . $result[1] . "]\n";
} else {
    echo "No indices found.\n";
}


/**
 * sum of two indices matched then return idex 
 * using for loop 
 */
function findTwoSumIndices($num,$target){
    $map =[];
 
    for($i=0; $i<$num; $i++){
        $final = $target-$num[$i];
        if(isset($map[$final])){
            return [$map[$final], $i];
     }
     $map[$num[$i]] = $i;
        
    }
    return [];
     
 }
 
 // Test case
 $nums = [13, 2,7, 13, 11];
 $target = 9;
 // Best-case scenario
 $result = findTwoSumIndices($nums, $target);
 if (!empty($result)) {
     echo "Indices: [" . $result[0] . ", " . $result[1] . "]\n";
 } else {
     echo "No indices found.\n";
 }



 /**
 * sum of three indices matched then return index 
 * using for loop 
 */

 function findIndices($arr, $target) {
    $length = count($arr);
    
    for ($i = 0; $i < $length - 2; $i++) {
        for ($j = $i + 1; $j < $length - 1; $j++) {
            for ($k = $j + 1; $k < $length; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] === $target) {
                    return [$i, $j, $k];
                }
            }
        }
    }
    return null;
}
// Example usage
$array = [1, 2, 3, 4, 5, 6];
$targetSum = 12;

$indices = findIndices($array, $targetSum);

if ($indices !== null) {
    echo "Indices found: " . implode(", ", $indices);
} else {
    echo "No matching indices found.";
}




//get all tow sum   

function towSum($array,$target){
    $seen = [];
    $result =[];
      foreach ($array as $index => $num) {
          $complement = $target - $num;
          if (isset($seen[$complement])) {
              $result[]= [$num, $complement];
          }
          $seen[$num] = $index;
      }
      return $result;
  }
  $array =[1,2,3,4,5,6,7];
  $target = 9;
  $pairs = towSum($array,$target);
  echo "Pairs that sum up to $target:" . "\n";
  foreach ($pairs as $pair) {
      echo "{$pair[0]} + {$pair[1]}". " = " . $target . "\n";
  } 1

?>


