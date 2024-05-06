<?php
    $host="localhost";
    $user="malaksati";
    $pw="malak1Sati1@";
    $db="hotel_it";
    // Create connection
    $conn = mysqli_connect($host, $user, $pw);
    // Check connection
    if(!$conn)
        die("Database Connection failed: ". mysqli_connect_error());

    mysqli_select_db($conn,$db);

    // $query = "INSERT INTO booking (firstName,lastName,SSN,email,phone,checkIn,checkOut)
    //           VALUES ('Dodo','Ahmed','1234575','dodo@any.com','019876543','2024-02-13','2024-02-19')";
    // $result = mysqli_query($conn,$query);
    // if($result)
    //     echo "Row inserted";
    // else
    //     echo "Error with inserting the row: ".mysqli_error($conn);
?>