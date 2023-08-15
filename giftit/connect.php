<?php
    $user = 'root';
    $pass = '';
    $db_name = 'db_gift';

    $conn = new mysqli('localhost', $user, $pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>