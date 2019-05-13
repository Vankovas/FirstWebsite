<?php
$error='Error occured!'; 
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $connection = new mysqli("studmysql01.fhict.local", "dbi398734", "root123", "dbi398734");
    if ($connection->connect_error) die("Connection failed" . $connection->connect_error);
    else 
    {
        $sql = "INSERT INTO user (username, password) VALUES ('$username','$password')";   
        if ($connection->query($sql) === TRUE) {
        header("Location: ../../index.php");
        } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }
}

?>
