<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
function covertInt2BinaryDebug(int $a) {
    if ($a == 0) {
        return;
    }
    $return = "";
    $floor = floor($a / 2);
    $reminder = $a % 2;
    echo "a: $a: floor: $floor;; $reminder\n";
    $return = myint2bin($floor) . "$reminder";
    return $return;
}


function covertInt2BinaryMore($a) {
    if ($a == 0) {
        return;
    }
    $reminder = $a % 2;
    $return = covertInt2Binary(floor($a / 2)) . "$reminder";
    return $return;
}

function covertInt2Binary($x) {
    if ($x == 0) {
	return;
    }

    return covertInt2Binary(floor($x / 2)) . ($x % 2);
    
}

echo "<pre>";
echo covertInt2Binary(9) . " for 9\n";
echo covertInt2Binary(16) . " for 16\n";
echo covertInt2Binary(2) . " for 2\n";
echo covertInt2Binary(1) . " for 1\n";
echo covertInt2Binary(5) . " for 5\n";
echo covertInt2Binary(8) . " for 8\n";

