<?php
ob_start();
include_once('./db.php');

$date = $_POST['date'];
$text = $_POST['text'];
$desk_id = $_GET['desk_id'];
$room_id = $_GET['room_id'];

$sql = $conn->query("UPDATE `$table_name` SET `text`='$text',`visible`='0' WHERE `id`='$desk_id'");

header("Location: ../text.php?id=$room_id");
ob_end_flush();
die();