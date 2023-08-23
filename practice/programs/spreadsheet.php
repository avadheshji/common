<?php


/**
 *pop data in array with out using inbuild function 
 */
function getColumnFromNumber($columnNumber) {
    $columnName = '';
    
    while ($columnNumber > 0) {
        $remainder = ($columnNumber - 1) % 26;
        $columnName = chr(65 + $remainder) . $columnName;
        $columnNumber = intval(($columnNumber - $remainder) / 26);
    }
    
    return $columnName;
}

$columnNumber = 28; // Enter your column number here
$columnName = getColumnFromNumber($columnNumber);
echo $columnName; // Output: AB

//STRING TO NUMBER

function spreadsheetColumnToNumber($column)
{
    $column = strtoupper($column);
    $length = strlen($column);
    $result = 0;

    for ($i = 0; $i < $length; $i++) {
        $char = ord($column[$i]) - 64; // ASCII value of 'A' is 65
        $result = $result * 26 + $char;
    }

    return $result;
}

$inputString = "AB"; // Replace this with your input string
$spreadsheetNumber = spreadsheetColumnToNumber($inputString);
echo "Spreadsheet Number for '$inputString' is: " . $spreadsheetNumber;
