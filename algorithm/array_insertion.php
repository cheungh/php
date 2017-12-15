<?php
echo "<pre>";
$a = array();
for($i = 0; $i < 14; $i++) {
    $a[$i] = $i+1;
}
print_r($a);
function insertEleByPosForward($moveFromPos, $moveToPos) {
    global $a;
    $move = $a[$moveFromPos];
    for ($j = $moveFromPos; $j < $moveToPos; $j++) {
        //if ()
        $a[$j] = $a[$j+1];
        //echo $j . " j " . $a[$j] . "\n";
    }
    $a[$moveToPos] = $move;
    
}

function insertEleByPosBackward($moveFromPos, $moveToPos) {
    global $a;
    $move = $a[$moveFromPos];
    for ($j = $moveFromPos; $j >= $moveToPos; $j--) {

        $a[$j] = $a[$j-1];
    }
    $a[$moveToPos] = $move;
    
}

insertEleByPosForward(3, 8);
print_r($a);

insertEleByPosBackward(9, 2);
print_r($a);

/**
// better to do the implementation in function insertEleByPosBackward
// e.g. for($i = count($a) ; $i < 0 ; $i--) {
//          $a[$i] = $a[$i - 1];
//      }

$temp;
$temptemp;
for($i = 1; $i <= 5; $i++) {
    $temp = $a[$i];
    $a[$i] = $a[$i-1];
    
    if (is_null($temp)) {
        $temp = $a[$i];
        $a[$i] = $a[$i-1];
    }
    else {
        $temptemp = $a[$i];
        $a[$i] = $temp;
        $temp = $temptemp;
    }

    echo "i is $i = " . $a[$i]  . "\n";
    //echo ""
}*/

print_r($a);
