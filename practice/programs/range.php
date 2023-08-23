<?php

/**
 * print table without using loop
 */

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

/**
 * print table without using loop
 */

print implode("\n", range(1, 10)); 



/**
 * find specific number between 2 numbers
 * e.g print all number end with 7
 */

for ($i=-99; $i<99; $i++){
    if(abs($i)%10===7){
        echo $i . "\n";
    }
}

?>


