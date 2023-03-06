<?php

// A GET API that takes a string and returns a new string with reversed numbers in that string.The string might not contain numbers. 

$string = $_POST['string'];
$numbers = "/[0-9]/";

if (empty($string)){
    $stringResult = "string is required";
} 
else if (!preg_match($numbers,$string)){
    $stringResult = $string;
}
else {
    preg_match_all($numbers, $string, $matches);
    $arr = $matches[0];
    $n = count($arr);
    $j=0;
    for ($i = $n ; $n > 0 ; $i-- ) {
        $temp = $arr[$j];
        $arr[$j] = $arr[$i];
        $arr[$i] = $temp;
        $j++;
    }
    $stringResult = implode($arr);
}

echo json_encode( $stringResult);
?>