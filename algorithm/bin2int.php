<?php

function binaryToInteger($base_string, $base = 2) {
    // 1. a str
    $sum = 0;
    for ($i = 0; $i < strlen($base_string); $i++) {
	$multipler =  pow($base, (strlen($base_string) - ($i + 1)) );
	$sum += (int) $base_string[$i] * $multipler;
    }
    return $sum;
}

$int = binaryToInteger("10000");
echo "int is [$int]\n";

$int = binaryToInteger("100000");
echo "int is [$int]\n";

$int = binaryToInteger("1001");
echo "int is [$int]\n";


$int = binaryToInteger("523", 8);
echo "int is [$int]\n";

