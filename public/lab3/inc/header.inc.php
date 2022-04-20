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
            <ul class="plain_ul flex_container center_margin" style="border: 1px solid #000;width:max-content;">
                <li class=""><a class="plain_a nav_a" href="index.php">Home</a></li>
                <li class=""><a class="plain_a nav_a" href="about.php">About</a></li>
                <li class=""><a class="plain_a nav_a" href="detail.php">Detail</a></li>
                <li class=""><a class="plain_a nav_a" href="contact.php">Contact</a></li>
                <li class=""><a class="plain_a nav_a" href="shop.php">Shop</a></li>
            </ul>
        </div>
    </header>

    <section style="margin-top: 2em;">
        <div class="flex_container center_margin" style="width: fit-content;">
            <div style="padding: 1em;border: 1px solid #000;margin-right:1em;">
                <h1><?= esc($title) ?></h1>
                <p style="max-width: 30em;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nisi,
                    numquam, reprehenderit
                    reiciendis vitae esse maiores eius temporibus impedit iure consequatur aspernatur. Iste at iure
                    cupiditate vero doloribus nam magni?</p>
            </div>

            <div class="" style="border: 1px solid #000;padding: 1em;min-width:9em;max-width:15em;height:30em;">
                <h3>Last 10 Pages visited:</h3>
                <?php for ($i = sizeof($tracker) - 2; $i > sizeof($tracker) - 12 && $i > 0; $i--) : ?>
                <p>
                    <a class="plain_a" href="<?= esc($tracker[$i]['file']) ?>"><?= esc($tracker[$i]['title']) ?></a>
                </p>
                <?php endfor; ?>

            </div>
        </div>
    </section>
</body>

</html>