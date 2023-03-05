<?php

$numbers = $_GET['numbers'];
$palindrom = $_GET['word'];

// Selection Sort
if (empty($numbers)){
    $nbrResult = "numbers is required";
} else {
    $nbrARRAY = explode(',',$numbers);
    $n = count($nbrARRAY);
    for ($i = 0 ; $i < $n ; $i++ ) {
        $s = $i;
        for ($j = $i + 1; $j < $n ; $j++ ) {
            if ($nbrARRAY[$j] < $nbrARRAY[$s]){
                $s = $j;
            }
        }
        if ($s != $i) {
            $temp = $nbrARRAY[$i];
            $nbrARRAY[$i] = $nbrARRAY[$s];
            $nbrARRAY[$s] = $temp;
        }
    }
    $nbrResult = $nbrARRAY;
}





echo json_encode( $nbrResult);
?>