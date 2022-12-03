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
$table_name = date('Y_z');
$table_name = "d". $table_name;

// $sql = "CREATE TABLE $table_name (
//     id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     room_id VARCHAR(30),
//     text VARCHAR(30),
//     date VARCHAR(50),
//     visible TINYINT(1)
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }


// for ($i = 0; $i < 49; $i++) {
//     $sql = "INSERT INTO room (room_count) VALUES ('3')";
//     $conn->query($sql);
// }

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
