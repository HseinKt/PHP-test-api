<?php

$number = $_POST['number'];

// Prime number

function isPrime ($n){
    if( $n == 2 || $n == 3) return true;
    for( $i=2 ; $i<$n-1 ; $i++){
        if ($n % $i == 0){
            return false;
            break;
        }
        else {
            return true;
        }
    }
}

if (isPrime($number)){
    $primeResult = "Prime number";
}
else {
    $primeResult = "not a Prime number";
}

echo json_encode( $primeResult);
?>