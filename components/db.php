<?php

session_start();

$dbname = 'library';
$dbuser = 'root';
$pass = '';
$host = 'localhost';

$conn = new mysqli($host, $dbuser, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//   echo "Connected successfully";


// for ($i = 0; $i < 49; $i++) {
//     $sql = "INSERT INTO room (room_count) VALUES ('3')";
//     $conn->query($sql);
// }

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
