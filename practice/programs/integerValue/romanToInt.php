<?php

//roman to int
function romanToInteger($s){
  $romanToIntMap = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
    ];
    
    $result =0;
    $oldValue =0;
    $total = strlen($s)-1;
   for($i=$total; $i>=0; $i--){
       $currentValue = $romanToIntMap[$s[$i]];
       if($currentValue < $oldValue){
           $result -= $currentValue;
       }else {
           $result += $currentValue;
       }
       $oldValue = $currentValue;
   }
    return $result;

}
$romanNumber = 'XXIV';
$number = romanToInteger($romanNumber);
echo "Number Is " .$number;
    


function numberToRomanRepresentation($number) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}
echo numberToRomanRepresentation(23);

?>