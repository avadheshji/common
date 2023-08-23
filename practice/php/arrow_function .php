<?php


/**
 * https://www.phptutorial.net/php-tutorial/php-arrow-functions/
 * In this syntax, an arrow function
 * Start with the fn keyword.
 * Can have only one expression and return this expression.
 */

 //syntax for creating arrow function 

fn (arguments) => expression;



e.g 

$abc = fn ($a ,$b) => $a == $b;

echo $abc(100, '100'); // 1 (or true)




$abc = fn ($a ,$b) => $a + $b;
echo $abc(100, 100); // 200

