<?php


/**
 *power using php code
 */


 function power($base, $exponent) {
    $result = 1;
    
    for ($i = 0; $i < $exponent; $i++) {
        $result *= $base;
    }
    
    return $result;
}

$base = 2;
$exponent = 5;

$result = power($base, $exponent);
echo "{$base} raised to the power of {$exponent} is: {$result}";
