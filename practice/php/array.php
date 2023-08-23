<?php

//Advanced php 

    //Annonymous function 
    https://www.phptutorial.net/php-tutorial/php-anonymous-functions/

    //
//end of advanced php

//to create array form 1 to 10
$scores = range(1,10);


//creating an array 

$array = array();
$array = [];




//display array data

function print_array($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

$scores = [1, 2, 3];

print_array($scores);



// Accessing array elements

$array_name[index];
$scores = [1, 2, 3];
echo $scores[0];



//Adding an element to the array
$scores = [1, 2, 3];
$scores[] = 4;



//Changing array elements
$scores = [1, 2, 3];
$scores[0] = 0;



//Removing array elements

$scores = [1, 2, 3];
unset($scores[1]);



//Getting the size of an array

$scores = [1, 2, 3, 4, 5];

echo count($scores);







 ?>
