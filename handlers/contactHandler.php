<?php
include "../inc/connection.php";
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $id = $_SESSION['user_id'];
    $query = "INSERT INTO messages (customer_id,name,email,subject,message)
                VALUES ('$id','$name','$email','$subject','$message')";
    if (mysqli_query($conn, $query))
        header("location: ../index.php");
    else
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>