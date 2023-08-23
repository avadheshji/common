<?php
/**
 * sum of two indices matched then return index 
 */

//two suM
function towSum($array,$target){
    $lb =0;
    $ub = count($array)-1;
    $result = [];
    while($lb < $ub){
       $total = $array[$lb] + $array[$ub];
       if($total == $target){
            $result[] = [$array[$lb], $array[$ub]];
            $lb++;
            $ub--;
       }else if ($total < $target){
           $lb++;
       }else {
           $ub--;
       }
    }
    return $result;
}
$array =[1,2,3,4,5,6,7];
$target = 9;
$pairs = towSum($array,$target);
echo "Pairs that sum up to $target:" . "\n";
foreach ($pairs as $pair) {
    echo "{$pair[0]} + {$pair[1]}". " = " . $target . "\n";
}

?>


