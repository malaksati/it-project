<?php
include "../inc/connection.php";
session_start();
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $ssn = $_POST['ssn'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $payment = $_POST['pay'];
    $id = $_SESSION['user_id'];
    $query = "INSERT INTO booking (customer_id,firstname,lastname,ssn,email,phone,checkIn,checkOut,payment)
                VALUES ('$id','$fname','$lname','$ssn','$email','$phone','$checkIn','$checkOut','$payment')";
    if (mysqli_query($conn, $query))
        header("location: ../index.php");
    else
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
