<?php
$arr = [1, 2, 3];
$sum = 0;
print_r(array_map(function ($e) use (&$sum) {
    $sum = $sum + $e;
    return $e;
}, $arr));
echo $sum;
