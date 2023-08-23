<?php
function countElementFrequency($arr) {
    $frequency = array();
    $length = count($arr);
    $left = 0;
    $right = 0;
    while ($right < $length) {
        $currentElement = $arr[$right];
        if (!isset($frequency[$currentElement])) {
            $frequency[$currentElement] = 1;
        } else {
            $frequency[$currentElement]++;
        }
        $right++;
    }

    foreach ($frequency as $element => $count) {
        echo "Element: $element, Frequency: $count\n";
    }
}
$array = [1, 2, 3, 2, 4, 1, 3, 2, 4, 1];
countElementFrequency($array);
?>



<?php
function countElementFrequency($arr) {
$frequency =[];
$left =0;
$right = 0;
$length = strlen($arr);
    while ($right < $length){
        $currentElement = $arr[$right];
        if(!isset($frequency[$currentElement])){
            $frequency[$currentElement] = 1;
        }else {
            $frequency[$currentElement]++;
        }
        $right++;
    }
    foreach ($frequency as $element => $count) {
        echo "Element: $element, Frequency: $count\n";
    }
}
//$array = [1, 2, 3, 2, 4, 1, 3, 2, 4, 1];
$array = "hello world";
countElementFrequency($array);
?>