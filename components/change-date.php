<?php

$date = strtotime($_GET['date']);
$tablename = "d" . date('Y_z', $date);

header("Location: ../index.php?table_name=$tablename");
