<?php
include_once('./components/db.php');

$id = $_GET['id'];
$query = $conn->query("SELECT * FROM $table_name WHERE room_id='$id'");
$desks = [];
while ($row = $query->fetch_assoc()) {
    array_push($desks, $row);
}
$i = 0;
// var_dump($desks);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/text.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">
    <title>Document</title>
</head>

<body>

    <a href="index.php" class="goback">go back</a>
    <?php foreach ($desks as $desk) : ?>
        <div class="card card--accent">
            <h2><svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-coffee" href="#icon-coffee">
                </svg>Room <?= $i + 1 ?></h2>
              
            <form class="input" action="components/update-room.php?desk_id=<?= $desk['id']?>&room_id=<?= $desk['room_id']?>" method="post">
                <div class="input">
                    <textarea class="input__field" name="text" id="editor" required><?= $desk['text'] ?></textarea>
                    <span class="input__label">Text</span>
                </div>
                <div class="button-group">
                    <input class="button1" type="submit" value="save">
                    <!-- <button type="reset">Reset</button> -->
                </div>
            </form>
        </div>
    <?php $i++;
    endforeach; ?>

    <div class="card card--inverted">
        <h2>Colors</h2>
        <p>Play around with the colors</p>
        <input type="color" data-color="light" value="#ffffff" />
        <input type="color" data-color="dark" value="#212121" />
        <input type="color" data-color="signal" value="#fab700" />
    </div>
    </article>

    <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
        <symbol id="icon-coffee" viewBox="0 0 20 20">
            <title>icon-coffee</title>
            <path fill="currentColor" d="M15,17H14V9h3a3,3,0,0,1,3,3h0A5,5,0,0,1,15,17Zm1-6v3.83A3,3,0,0,0,18,12a1,1,0,0,0-1-1Z" />
            <rect fill="currentColor" x="1" y="7" width="15" height="12" rx="3" ry="3" />
            <path fill="var(--color-accent)" d="M7.07,5.42a5.45,5.45,0,0,1,0-4.85,1,1,0,0,1,1.79.89,3.44,3.44,0,0,0,0,3.06,1,1,0,0,1-1.79.89Z" />
            <path fill="var(--color-accent)" d="M3.07,5.42a5.45,5.45,0,0,1,0-4.85,1,1,0,0,1,1.79.89,3.44,3.44,0,0,0,0,3.06,1,1,0,1,1-1.79.89Z" />
            <path fill="var(--color-accent)" d="M11.07,5.42a5.45,5.45,0,0,1,0-4.85,1,1,0,0,1,1.79.89,3.44,3.44,0,0,0,0,3.06,1,1,0,1,1-1.79.89Z" />
        </symbol>
    </svg>

    <script src="js/text.js?v=<?= time() ?>"></script>

</body>

</html>