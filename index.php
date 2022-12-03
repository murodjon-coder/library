<?php
include_once('./components/db.php');

$query = $conn->query("SELECT * FROM room");
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
            <input type="date" name="begin" class="date" placeholder="Choose Date" value="" min="1997-01-01" max="2030-12-31">
        </div>
        <div class="blog gallery-items">
            <?php
            while ($room = $query->fetch_assoc()) : ?>
                <a href="text.php?id=<?= $room['id'] ?>" class="box__link <?= $room['room_count'] != 0 ? '' : 'active' ?> box item">
                    <h2 class="box-h1">Room <?= $room['id'] ?></h2>
                    <span class="box-span"><?= $room['room_count'] ?></span>
                </a>
            <?php endwhile; ?>
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