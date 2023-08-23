<?php
$v = "vivek";

// Pattern 1: Horizontal pattern
for ($i = 0; $i < strlen($v); $i++) {
    echo $v[$i] . " ";
}
echo PHP_EOL;

// Pattern 2: Vertical pattern
for ($i = 0; $i < strlen($v); $i++) {
    echo $v[$i] . PHP_EOL;
}

// Pattern 3: Diagonal pattern
for ($i = 0; $i < strlen($v); $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    echo $v[$i] . PHP_EOL;
}

// Pattern 4: Reverse diagonal pattern
for ($i = 0; $i < strlen($v); $i++) {
    for ($j = strlen($v) - 1; $j > $i; $j--) {
        echo " ";
    }
    echo $v[$i] . PHP_EOL;
}

// Pattern 5: Triangle pattern
for ($i = 0; $i < strlen($v); $i++) {
    for ($j = strlen($v) - 1; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k <= $i; $k++) {
        echo $v[$k] . " ";
    }
    echo PHP_EOL;
}
?>
