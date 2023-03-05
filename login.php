<?php

$email = $_POST['email'];
$password = $_POST['password'];

$Email_pattern ="/[a-z0-9]+@[a-z0-9.-]+\.[a-z]{3,}$/";
$specialChars = '/[`!@#$%^&*()_+\-=\[\]{};:"\\|,.<>\/?~]/';
$upperCase = "/[A-Z]/";

// email Validate
if (empty($email)){
    $emailResult = "Email is required";
} 
else if (preg_match($Email_pattern,$email)){
    $emailResult = "Email sucess";
}else {
    $emailResult = "Email Failed";
}




echo json_encode( $emailResult);
?>