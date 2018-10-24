<?php
// utility func to print matrix
function printMatrix($matrix) {
    for($i = 0; $i < count($matrix); $i++) {
        $str = "";
        for($j = 0; $j < count($matrix[$i]); $j++) {
            $str .= $matrix[$i][$j] . " ";
        }
        echo $str . "\n";
    }
}

/**
rotate from:
1 2 3 4
5 6 7 8
9 10 11 12
13 14 15 16
===========
5 1 2 3
9 10 6 4
13 11 7 8
14 15 16 12
*/
function rotateMatrix($matrix) {
    
    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

    while ($bottom > $top && $right > $left) {
        $prev = $matrix[$top + 1][$left];

        // move top row from left to right
        for ($i = $left; $i <= $right; $i++) {
            $tmp = $matrix[$top][$i];
            $matrix[$top][$i] = $prev;
            $prev = $tmp;
        }
        $top += 1;

        // move right column from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $tmp = $matrix[$i][$right];
            $matrix[$i][$right] = $prev;
            $prev = $tmp;
        }
        $right -= 1;

        // move right to left on bottom row
        for ($i = $right; $i >= $left; $i--) {
            $tmp = $matrix[$bottom][$i];
            $matrix[$bottom][$i] = $prev;
            $prev = $tmp;
        }
        $bottom -= 1;

        // move bottom to top on left column
        for ($i = $bottom; $i >= $top; $i--) {
            $tmp = $matrix[$i][$left];
            $matrix[$i][$left] = $prev;
            $prev = $tmp;
        }
        $left += 1;
    }
    return $matrix;
}

$matrix = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8),
    array(9, 10, 11, 12),
    array(13, 14, 15, 16)
);
printMatrix($matrix);
$rotated_matrix = rotateMatrix($matrix);
echo "===========\n";
printMatrix($rotated_matrix);
/** output
1 2 3 4
5 6 7 8
9 10 11 12
13 14 15 16
===========
5 1 2 3
9 10 6 4
13 11 7 8
14 15 16 12
 */