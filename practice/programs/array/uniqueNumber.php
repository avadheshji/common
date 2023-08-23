<?php

function findUniqueValues($array) {
    $uniqueValues = array();
    $length = count($array);
    
    for ($i = 0; $i < $length; $i++) {
      $isUnique = true;
      
      for ($j = 0; $j < $length; $j++) {
        if ($i !== $j && $array[$i] === $array[$j]) {
          $isUnique = false;
          break;
        }
      }
      
      if ($isUnique) {
        $uniqueValues[] = $array[$i];
      }
    }
    
    return $uniqueValues;
  }
  
  // Example usage
  $array = array(1, 2, 3, 4, 2, 3, 1, 5);
  $uniqueValues = findUniqueValues($array);
  
  // Output the unique values
  foreach ($uniqueValues as $value) {
    echo $value . "\n";
  }
  




  //using foreach loop


  function findUniqueValues($array) {
    $uniqueValues = array();
    foreach ($array as $value) {
        $isUnique = true;
        foreach ($uniqueValues as $uniqueValue) {
            if ($value === $uniqueValue) {
                $isUnique = false;
                break;
            }
        }
        if ($isUnique) {
            $uniqueValues[] = $value;
        }
    }
    return $uniqueValues;
}
// Example usage:
$array = array(2, 4, 6, 8, 4, 10, 2, 8, 12);
$uniqueValues = findUniqueValues($array);
print_r($uniqueValues);