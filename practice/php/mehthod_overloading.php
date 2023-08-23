<?php
//method overloading
/**
 * In function overloading, more than one function can have same method signature but different number of arguments.
 * function overloading can be achieve using __call
 */
class shape {
	function __call($name_of_function, $arguments) {
		if($name_of_function == 'area') {
			switch (count($arguments)) {
				case 1:
					return 3.14 * $arguments[0];
				case 2:
					return $arguments[0]*$arguments[1];
			}
		}
	}
}
$s = new Shape;
//echo($s->area(2));
echo "\n";
echo ($s->area(4, 2));
