<?php

// $ip = $_GET['ip'];

// A GET API to retrieve your IP address
if (isset($_SERVER['REMOTE_ADDR'])){
    $ipResult = $_SERVER['REMOTE_ADDR'];
}
else {
    $ipResult = "UNKNOWN";
}

// echo json_encode( $ipResult);

$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
    if ($query && $query['status'] == 'success') {
        echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
    }
    foreach ($query as $data) {
        echo $data . "<br>";
    }

echo json_encode( $query);
?>