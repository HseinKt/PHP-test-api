<?php

// $ip = $_GET['ip'];

// A GET API to retrieve your IP address
if (isset($_SERVER['REMOTE_ADDR'])){
    $ipResult = $_SERVER['REMOTE_ADDR'];
}
else {
    $ipResult = "UNKNOWN";
}

echo json_encode( $ipResult);
?>