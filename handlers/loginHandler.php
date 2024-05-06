<?php 
include("../inc/connection.php");

if (isset($_POST['login'])) {
    //get data from form 
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $sql = "select * from customer where Email = '$user_email'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
    if ($user['Email']==$user_email) {
        $db_pass = $user['Password'];
        //verfication
        if (password_verify($user_password, $db_pass)) {
            session_start();
            $_SESSION['user_name'] = "{$user['FullName']}";
            $_SESSION['user_id'] = "{$user['id']}";
            header("location: ../index.php");
        } else {
            header("location: ../login.php");
        }
    } else {
        header("location: ../login.php");
    }
} else {
    header("location: ../login.php");
}
?>