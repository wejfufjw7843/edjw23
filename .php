<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 10;
echo "Факториал числа $number: " . factorial($number);
Факториал числа 10: 3628800
?>