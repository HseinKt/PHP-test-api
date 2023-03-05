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

// Palindrom
// code JS
// if(str.length === 1) {
//     return true;
// }
// else if(str.length === 2) {
//     return str[0] === str[1];
// }
// else if(str[0] === str.slice(-1)) {
//     return isPalindrome(str.slice(1,-1))
// }
// else {
//     return false;
// }

if (empty($palindrom)){
    $pldResult = "word is required";
}else {
    if (isPalindrom($palindrom)){
        $pldResult = "Palindrom word";
    }
    else {
        $pldResult = "Not a palindrom word";
    }
}

function isPalindrom($pal) {
    $len = strlen($pal);
    if ($len == 1){
        return TRUE;
    }
    else if ($len == 2){
        if ($pal[0] == $pal[1]){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    else if ($pal[0] == $pal[-1]) {
        return isPalindrom(substr($pal,1,-1));
    }
    else return FALSE;
}

echo json_encode( $pldResult);
?>