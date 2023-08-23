<?php
https://gist.github.com/dasider41/dd67c14ee5314a0c5c01f3a671109e48

https://www.sanfoundry.com/dynamic-programming-problems-solutions/




print table without using loop

function twoTable($num,$i){
  if($i>10){
    return false;
  }else{
    echo ($num * $i);
    echo "\n";
    twoTable($num, ++$i);
  }
}
$num =2;
$i = 1;
twoTable($num, $i);



Print number without using loop

print implode("\n", range(1, 10)); 
















<?php
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


?>


 ?>
