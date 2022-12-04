<?php

$date = strtotime($_GET['date']);

header("Location: ../index.php?date=$date");
