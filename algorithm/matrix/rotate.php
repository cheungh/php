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
1 2 3 
4 5 6 
7 8 9 
10 11 12 
to:
10 7 4 1
11 8 5 2
12 9 6 3
 */
function rotateMatrix($matrix) {
    // let bottom_row_counter be counter to keep track of the reserved index counter
    // as the func will process from bottom to top
    $bottom_row_counter = count($matrix) - 1;
    $rotated_matrix = array();
    //$rotated_matrix = array(count($matrix[0]));
    // loop backward from reverse row
    // let input_row_counter be counter to keep track input rows count
    // input_row_counter starts from 0 to count - 1
    $input_row_counter = 0;
    while ($bottom_row_counter >= 0) {
        for($i = 0; $i < count($matrix[$bottom_row_counter]); $i++) {
            if (!$rotated_matrix[$i]) {
                $rotated_matrix[$i] = array();
            }
            $rotated_matrix[$i][$input_row_counter] = $matrix[$bottom_row_counter][$i];
        }
        $bottom_row_counter--;
        $input_row_counter++;
    }
    return $rotated_matrix;
}

$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
    array(10,11,12)
);

$rotated_matrix = rotateMatrix($matrix);
printMatrix($rotated_matrix);