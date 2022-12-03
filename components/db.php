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
if ($_GET['table_name']) {
    $table_name = $_GET['table_name'];
} else {
    $table_name = date('Y_z');
    $table_name = "d" . $table_name;
}

// SQL query
$sql = "SHOW TABLES IN `library`";

// perform the query and store the result
$result = $conn->query($sql);
if ($result !== false) {
    // if at least one table in result
    if ($result->num_rows > 0) {
        // traverse the $result and output the name of the table(s)
        while ($row = $result->fetch_assoc()) {
            if ($row['Tables_in_library'] != $table_name) {
                if ($row['Tables_in_library']) {
                    
                }
                $sql = "CREATE TABLE IF NOT EXISTS  $table_name (
                    id INT(7) AUTO_INCREMENT PRIMARY KEY,
                    room_id INT(7),
                    text LONGTEXT,
                    visible TINYINT(1) DEFAULT 1
                    )";

                if ($conn->query($sql) === TRUE) {
                    var_dump(true);
                    $room_id = 100;
                    for ($i = 0; $i < 150; $i++) {
                        if ($i % 3 == 0) {
                            $room_id += 1;
                        }
                        $sql = "INSERT INTO `$table_name`(`room_id`, `text`) VALUES ($room_id,'')";
                        $conn->query($sql);
                    }
                }
                break;
            }
        }
    } else echo 'There is no table in "tests"';
} else echo 'Unable to check the "tests", error - ' . $conn->error;


// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
