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

// Password Validate
if (empty($password)){
    $passwordResult = "password is required";
} 
else if(strlen($password) < 8){
    $passwordResult = " Password should contain 8 characters minimum";
}
else if (!preg_match($specialChars,$password)){
    $passwordResult = "Password should contain one special character at least";
}
else if (!preg_match($upperCase,$password)){
    $passwordResult = "Password should contain at least one upper case letter";
}
else {
    $passwordResult = "Password success";
}



echo json_encode( $passwordResult);
?>