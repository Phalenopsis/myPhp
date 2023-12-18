<?php

function fib(int $n): int
{
    if ($n < 2) return $n;
    $n1 = 0;
    $n2 = 1;

    for ($i = 2; $i <= $n; $i++) {
        [$n1, $n2] = [$n2, $n1 + $n2];
    }
    return $n2;
}


var_dump(fib(8));
var_dump(fib(9));
var_dump(fib(10));
