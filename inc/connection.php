<?php
$host = "localhost";
$user_name = "root";
$user_pass = "";
$db_name = "hotel";

try {
    $dsn = "mysql:host=$host;dbname=$db_name;";
    $connection = new PDO($dsn, $user_name, $user_pass);
    return $connection;
}catch(PDOException $err) {
    echo "<h1>Error Happens {$err->getMessage()}</h1>";
}

?>