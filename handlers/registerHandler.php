<?php
include("../inc/connection.php");
if (isset($_POST['add-btn'])) {
    $fullname = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $errors = array();
    if (empty($fullname) or empty($email) or empty($password)) {
        array_push($errors, 'All Fields are required');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, 'Email is not valid');
    }
    if (strlen($password) < 8) {
        array_push($errors, 'Password must be at least 8 characters');
    }

    $sql = "SELECT* FROM customer WHERE Email= '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, 'Email already exists');
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        //we will insert data into database

        $sql = "INSERT INTO customer (FullName, Email, Password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $passwordhash);
            mysqli_stmt_execute($stmt);
            //echo "<div class='alert alert-success'>you are registered successfully</div>";
            header("location: ../login.php");
        } else {
            die("something went wrong");
        }
    }
}
