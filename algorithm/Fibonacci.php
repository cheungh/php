<?php

function Fibonacci ($n)
{
    if ($n == 1)    {
        return 1;
    }
    if ($n == 0)    {
        return 0;
    }

    return Fibonacci($n - 1)  + Fibonacci($n - 2) ;
}

echo Fibonacci(6);

function fibonacciIterate(int $n): int {
    
    $cached = array(1,1);
    for ($i = 2; $i <= $n; $i++) {
        $a = $i - 1;
        $b = $i - 2;
        $cached[$i] = $cached[$a] + $cached[$b];
    }

    return $cached[$n];
}
echo fibonacciIterate(6);
