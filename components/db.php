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

$date = $_GET['date'] ?? null;

if ($date) {
    if ($date > strtotime("2022-12-02") && $date < strtotime('tomorrow')) {
        $check_table_name = "d" . date('Y_z', $date);
        if (checkTableExists($check_table_name)) {
            $table_name = $check_table_name;
        } else {
            $table_name = null;
        }
    } else {
        $table_name = null;
    }
} else {
    $table_name = date('Y_z');
    $table_name = "d" . $table_name;
    if (!checkTableExists($table_name)) {
        createTable();
    }
}

function checkTableExists($table_name)
{
    global $conn, $dbname;
    $isTableExist = false;
    $sql = "SHOW TABLES IN `$dbname`";
    $result = $conn->query($sql);
    if ($result !== FALSE) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["Tables_in_$dbname"] == $table_name) {
                    $isTableExist = true;
                    break;
                }
            }
        }
    }
    return $isTableExist;
}
function createTable()
{
    global $conn, $table_name;
    $sql = "CREATE TABLE $table_name (
        id INT(7) AUTO_INCREMENT PRIMARY KEY,
        room_id INT(7),
        text LONGTEXT,
        visible TINYINT(1) DEFAULT 1
        )";

    if ($conn->query($sql) === TRUE) {
        $room_id = 100;
        for ($i = 0; $i < 150; $i++) {
            if ($i % 3 == 0) {
                $room_id += 1;
            }
            $sql = "INSERT INTO `$table_name`(`room_id`, `text`) VALUES ($room_id,'')";
            $conn->query($sql);
        }
    }
}


// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
