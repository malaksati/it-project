<?php 
require_once("../classes/User.php");

$user_name = $_POST['username'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];
$pass = password_hash($user_password, PASSWORD_DEFAULT); //hashing 3shan mhdsh y3rf elpass
    

$product = new User();
$products = $product->Register($user_name, $user_email, $pass);
header("location: ../login.php");
?>