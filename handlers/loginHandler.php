<?php 
require_once("../classes/User.php"); 
$user = new User();
$userlog = $user->Login();
if($userlog == true) {
    header("location: ../index.php");
}else {
    if($userlog == "Renter Your Password") {
        header("location: ../login.php?message=$userlog");
    }else if($userlog == "Email doesn't exist go to register page") {
        header("location: ../login.php?message=$userlog");
    }
}
?>