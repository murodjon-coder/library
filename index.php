<?php
include_once('./components/db.php');

$query = $conn->query("SELECT * FROM $table_name");
$desks = [];
$i = 1;
$j = 1;
$roomcount = 0;
while ($row = $query->fetch_assoc()) {
    $roomcount += $row['visible'];
    if ($i % 3 == 0) {
        array_push($desks, array(
            'id' => $j + 100,
            'room_count' => $roomcount,
        ));
        $roomcount = 0;
        $j++;
    }
    $i++;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <title>Ednaa Book Room</title>
</head>

<body>
    <div class="container">
        <div class="group">
            <form action="./components/change-date.php" method="get">
                <input type="date" name="date" class="date" placeholder="Choose Date" required>
                <button type="submit">Apply</button>
            </form>
        </div>
        <div class="blog gallery-items">
            <?php
            foreach ($desks as $desk) :  ?>
                <a href="text.php?id=<?= $desk['id'] ?>" class="box__link <?= $desk['room_count'] != 0 ? '' : 'active' ?> box item">
                    <h2 class="box-h1">Room <?= $desk['id'] ?></h2>
                    <span class="box-span"><?= $desk['room_count'] ?></span>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="pagination">
            <div class="prev">Prev</div>
            <div class="page"> <span class="page-num"></span></div>
            <div class="next">Next</div>
        </div>
        <div class="gr">
            <a class="booknow" href="">Book Room</a>
        </div>
    </div>

    <script src="js/script.js?v=<?= time() ?>"></script>
</body>

</html>