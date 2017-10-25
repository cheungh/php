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

function covertInt2Binary($x) {
    if ($x == 0) {
	return;
    }

    return covertInt2Binary(floor($x / 2)) . ($x % 2);
    
}

// any base conversation
// defaulted to 2
/*
* example of Int(9)
* floor 9 / 2 is 4
  reminder is 1 
  pass 4 to recursive call 
  floor 4 is 2 ; reminder is 0
  pass 2 to recursive call 
  floor 2 is 1 ; reminder is 0
  pass 1 to recursive call 
  floor 1 is 0 ; reminder is 1
  return 1001
*/
function covertInt2NumberBase($x, $base = 2) {
    // recursive base to return
    if ($x == 0) {
        return;
    }
    // get the floor of a division
    $floor = floor($x / $base);
    // get the reminder number
    $reminder = ($x % $base);
    // resursive call
    return covertInt2Binary($floor, $base) . $reminder;
    // can be written in one line
    // return covertInt2NumberBase(floor($x / $base)) . ($x % $base);

}

echo "<pre>";
echo covertInt2NumberBase(9) . " for 9\n";
echo covertInt2NumberBase(16) . " for 16\n";
echo covertInt2NumberBase(2) . " for 2\n";
echo covertInt2NumberBase(1) . " for 1\n";
echo covertInt2NumberBase(5) . " for 5\n";
echo covertInt2NumberBase(8) . " for 8\n";

