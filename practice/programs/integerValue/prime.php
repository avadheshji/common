<?php
//find the prime between 1 to 100

function primeNumber($nums){
    for($i=2;$i<$nums;$i++){
        $isPrime= true;
        for($j=2;$j<($i/2);$j++){
            if($i % $j == 0){
              $isPrime= false;  
            }
        }
        if($isPrime == true){
            echo $i ."\n";
        }
    }
}

$num=100;
$prime = primeNumber($num);