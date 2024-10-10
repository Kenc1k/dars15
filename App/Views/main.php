<?php

use App\Helpers;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <ul>
        <li><a href="/">Bosh sahifa</a></li>
        <li><a href="/about">about sahifa</a></li>
        <li><a href="/contact">Contact sahifa</a></li>
    </ul>
    <?= $content?>

    <h1>Footer</h1>

    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, consectetur voluptatem. Esse quidem vel blanditiis quisquam. Vel perspiciatis animi pariatur autem atque sint rerum quasi, quos obcaecati quod nam fugit!</p>
    </footer>
</body>
</html>