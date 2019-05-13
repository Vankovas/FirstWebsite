<?php
$error='Error occured!'; 
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $connection = new mysqli("studmysql01.fhict.local", "dbi398734", "root123", "dbi398734");
    if ($connection->connect_error) die("Connection failed" . $connection->connect_error);
    else 
    {
        $sql = "SELECT * FROM user WHERE password='$password' AND username='$username'";        
        $result = $connection->query($sql);
        $count = $result->num_rows;

        if ($count == 1) {
            session_start();
            $_SESSION['login_user'] = $username;
            header("Location: ../../index.php");
        }
    }
}

?>
