<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title><?= esc($title) ?></title>
</head>

<body>
    <header>
        <div>
            <ul class="plain_ul flex-container center_margin" style="border: 1px solid #000;width:max-content;">
                <li class=""><a class="plain_a nav_a" href="index.php">Home</a></li>
                <li class=""><a class="plain_a nav_a" href="about.php">About</a></li>
                <li class=""><a class="plain_a nav_a" href="detail.php">Detail</a></li>
                <li class=""><a class="plain_a nav_a" href="contact.php">Contact</a></li>
                <li class=""><a class="plain_a nav_a" href="shop.php">Shop</a></li>
            </ul>
        </div>
    </header>
</body>

</html>