<?php
/*
In PHP, when dealing with objects and arrays, it's essential to understand the concepts of shallow copy and deep copy. These concepts determine how references and values are handled when making copies of data structures. Let's explore both shallow copy and deep copy with examples:

Shallow Copy:
Shallow copy creates a new variable or data structure but maintains references to the original elements. Changes made to the copied structure will affect the original.
In PHP, arrays are shallow copied by default.
When objects are shallow copied, the object variables are still references to the original object.
Here's an example of a shallow copy using an array: */


$array1 = [1, 2, 3];
$array2 = $array1; // Shallow copy

$array2[0] = 10; // Modify the copied array

var_dump($array1); // Output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
var_dump($array2); // Output: array(3) { [0]=> int(10) [1]=> int(2) [2]=> int(3) }
/*
In the example above, $array1 is assigned to $array2, creating a shallow copy. Modifying an element in $array2 does not affect $array1. However, note that if the elements themselves were objects, changes made to those objects would still reflect in both arrays.

Deep Copy:
Deep copy creates a completely independent copy of the data structure, including all nested elements. Changes made to the copied structure will not affect the original.
In PHP, arrays require explicit deep copying.
Objects can be deep copied using serialization and unserialization.
Here's an example of deep copying an array using the unserialize() and serialize() functions:
*/
$array1 = [1, 2, 3];
$array2 = unserialize(serialize($array1)); // Deep copy

$array2[0] = 10; // Modify the copied array

var_dump($array1); // Output: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
var_dump($array2); // Output: array(3) { [0]=> int(10) [1]=> int(2) [2]=> int(3) }

/*
In the example above, serialize() is used to serialize $array1 into a string representation, and unserialize() is used to unserialize it back into an array, creating a deep copy. Modifying $array2 does not affect $array1.

When dealing with objects, you can implement the __clone() magic method to achieve a deep copy by explicitly cloning nested objects if necessary.
*/
class MyClass
{
    public $value;

    public function __clone()
    {
        $this->value = clone $this->value;
    }
}

$obj1 = new MyClass();
$obj1->value = new stdClass();
$obj2 = clone $obj1; // Deep copy

$obj2->value->property = 'test'; // Modify the copied object

var_dump($obj1->value->property); // Output: NULL
var_dump($obj2->value->property); // Output: string(4) "test"

/*
In this example, the __clone() method is implemented to perform a deep copy of the $value property by cloning the nested stdClass object. Modifying $obj2 does not affect $obj1.

By understanding the concepts of shallow copy and deep copy, you can choose the appropriate approach based on
*/
 ?>
