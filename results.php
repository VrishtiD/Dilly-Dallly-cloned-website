<?php


//$cpassword = $_POST['cpassword'];
$password=  filter_input(INPUT_POST,'password');
$username=  filter_input(INPUT_POST,'username');

if(empty($username)){
    $user_error="please insert userame";
}
elseif(!preg_match("/bootstrap/i",$username ) ){
    $user_error="the username provided is wrong";
}

if(empty($password)){
    $pswd_error="please insert password";
}
elseif(!preg_match("/clonedwebsite/i",$password)){
    $pswd_error="the password provided is wrong";
}
   
if(empty($user_error) && empty($pswd_error)){
    include("success.php");
}
else{
    include("index.php");
}



?>