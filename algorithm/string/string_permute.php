<?php
/**
 * function to generate all possible permutation of a string
 * e.g. ABC to
 * ABC, ACB, BAC, BCA, CBA, CAB
 */
function permutation(array &$array, int $left, int $right) {
    if ($left == $right) {
        // reach base case and output the string
        echo join("", $array) . "\n";
    }
    else {
        // starting from the left most, swap the char from left to left + 1 until right
        for ($i = $left; $i < $right; $i++) {
            swap($array, $i, $left);
            permutation($array, $left + 1, $right);
            // revert back to original string for all permutation
            swap($array, $left, $i);
        }
    }
}
/**
 * swapping array position i with j
 *
 */
function swap(&$a, $i, $j) {
    $temp = $a[$i];
    $a[$i] = $a[$j];
    $a[$j] = $temp;
}

$str = "ABC";
$a = str_split($str);
permutation($a, 0, count($a));