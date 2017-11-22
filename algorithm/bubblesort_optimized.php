<?php
/**
    1. let n be total count of list

    2. outer loop for all element in n
    for iteration from 0 < n
    let i be iterate variable


    3. inner loop for all element in
    for iteration from 0 < n - 1
    let j be iterate variable
    if j > j + 1
        call swap with list, j, j + 1
    end if
 */
function bubbleSort($a) {
    // total number of items
    $n = count($a);
    $bound = $n - 1;
    // outer loop
    for ($i = 0; $i < $n; $i++) {
        $swap = false;
        // newbound to keep track of last position $j was swapped
        // no need to go after last number was swapped
        $newbound = 0;
        // inner loop
        for ($j = 0; $j < $bound; $j++) {
            // if next item is smaller then i, swap
            if ($a[$j] > $a[$j + 1]) {
                $swap = true;
                swap($a, $j, $j + 1);
                // set newbound
                $newbound = $j;
            }
            echo implode(" ", $a) . "\n";
        }
        // set the inner bound using the last number that was swapped
        $bound = $newbound;
        // No swap taken place, therefore, we have a sorted list found in i loop, stop
        if (!$swap) {
            break;
        }
        echo "[$i] end\n";
    }
}

/*
 * swap function
 */
function swap(&$array, $i, $j) {
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

// test a already sorted list
$list = array( 1,2,3,4,5,6);
bubbleSort($list);

$list = array(9, 2, 7, 8, 5, 3);
bubbleSort($list);
