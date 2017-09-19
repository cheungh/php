<?php
/**
 * Created by PhpStorm.
 * User: cheungy
 * Date: 7/28/17
 * Time: 6:23 PM
 */


function fact1($n)
{

    if ($n == 1) {
        return 1;
    }
    return $n * fact1($n - 1);
}

function fact2($n)
{

    $result = 1;
    for ($i = $n; $i > 0 ; $i--) {
        // E.g. 5 * 4 * 3 * 2 * 1
        $result *= $i;
    }
    return $result;
}


echo fact2(5) . "\n";
echo fact1(5) . "\n";


















/*
function fact1($n) {
    if ($n == 1) {
        return 1;
    }
    return $n * fact1($n - 1);
}


echo factorial(5);


function factorialx(int $n): int {
    if ($n == 1)
        return 1;

    return $n * factorial($n - 1);
}

function factorial(int $n): int {
    $result = 1;

    for ($i = $n; $i > 0; $i--) {
        $result *= $i;
    }

    return $result;
}

*/