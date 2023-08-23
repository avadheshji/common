<?php
  //strstr
  $myString = 'Hello, there!';
  echo strstr( $myString, 'llo' );  // Displays "llo, there!"

  If the text wasn’t found then strstr() returns false. You can use this fact to determine if the text chunk was in the string or not:

  strstr() is case sensitive — for example, "hello" won’t match "Hello". If you don’t care about matching case, use the case-insensitive version, stristr(), instead.

  //stristr
  strstr() is case sensitive — for example, "hello" won’t match "Hello". If you don’t care about matching case, use the case-insensitive version, stristr(), instead.

  $myString = 'Hello, there!';
  echo stristr( $myString, 'h' ); // Hello, there!


  //strpos

  $myString = 'Hello, there!';
  echo strpos( $myString, 'llo' );  // Displays "2"

  strpos() returns 0,

  You can pass a third argument to strpos() to specify the index position from which to begin the search:

  $myString = 'Hello, there!';
  echo strpos( $myString, 'e' ) . '<br />';     // Displays "1"
  echo strpos( $myString, 'e', 2 ) . '<br />';  // Displays "9"

  it is case sensitive

  //strrpos
  The strrpos() function is very similar to strpos(). The only difference is that it finds the last matched in the string instead of the first.

  $myString = 'Hello, there!';
  echo strpos( $myString, 'e' ) . "<br />";   // Displays "1"
  echo strrpos( $myString, 'e' ) . "<br />";  // Displays "11"


  //strripos

  the strpos() and strrpos() functions are case sensitive. Their case-insensitive equivalents are strripos() respectively


  //substr_count

  The substr_count() function counts the number of times a substring occurs in a string.

  echo substr_count("Hello world. The world is nice","world"); // 2
  $str = "This is nice";
  echo strlen($str)."<br>"; //12------- Using strlen() to return the string length
  echo substr_count($str,"is")."<br>"; //2-------- The number of times "is" occurs in the string
  echo substr_count($str,"is",2)."<br>"; //2------ The string is now reduced to "is is nice"
  echo substr_count($str,"is",3)."<br>"; //1------ The string is now reduced to "s is nice"
  echo substr_count($str,"is",3,3)."<br>"; //0----- The string is now reduced to "s i"





?>
