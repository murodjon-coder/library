<?php
ob_start();
include_once('./db.php');

$date = $_POST['date'];
$text = $_POST['text'];
$room_count = $_GET['room_count'] - 1;
$desk_id = $_GET['desk_id'];
$room_id = $_GET['room_id'];

$sql = $conn->query("UPDATE `room` SET `room_count`='$room_count' WHERE `id`='$room_id'");
$sql = $conn->query("UPDATE `desks` SET `text`='$text',`date`='$date',`visible`='0' WHERE `id`='$desk_id'");

header("Location: ../text.php?id=$room_id");
ob_end_flush();
die();