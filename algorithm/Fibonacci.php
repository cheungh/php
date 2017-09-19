<?php

function Fibonacci ($n)
{
    if ($n == 1)    {
        return 1;
    }
    if ($n == 0)    {
        return 0;
    }

    // if ($n)
    return Fibonacci($n - 1)  + Fibonacci($n - 2) ;
}

echo Fibonacci(6);

