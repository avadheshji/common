<?php 
//reverse number

function reverseNumber($num){
    $str = (string)$num;
    $rev = 0;
    while($num > 0){
       $remainder = $num % 10;
       $rev = $rev * 10 + $remainder;
       $num = (int)($num /10);
    }
    return $rev;
}

$num=321;
$value = reverseNumber($num);
echo $value;


// better way using two pointer approach
//this will work for both number and string

    function reverseNumber2($num){
        $str = (string)$num;
        $lb = 0;
        $ub =strlen($str)-1;
        $temp ='';
        while($lb < $ub){
            $temp = $str[$lb];
            $str[$lb] = $str[$ub];
            $str[$ub] = $temp;
            $lb++;
            $ub--;
        }
        return $str;
    }

    $num=567899;
    $value = reverseNumber2($num);
    echo $value;


