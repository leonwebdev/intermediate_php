<?php

ob_start();

// require functions
require __DIR__ . './../includes/functions.php';

// require model
require __DIR__ . './../includes/model.php';

if (!empty($_GET)) {

    if (array_key_exists('author_id', $_GET)) {

        $query_by_author_results = queryByAuthor($_GET['author_id']);
        $title = $query_by_author_results['page_title'];
        $books = $query_by_author_results['query_result'];
    } elseif (array_key_exists('genre_id', $_GET)) {

        $query_by_genre_results = queryByGenre($_GET['genre_id']);
        $title = $query_by_genre_results['page_title'];
        $books = $query_by_genre_results['query_result'];
    } elseif (array_key_exists('search', $_GET)) {

        $query_by_search_results = queryBySearch($_GET['search']);
        $title = $query_by_search_results['page_title'];
        $books = $query_by_search_results['query_result'];
    } else {

        $general_query_results = generalQuery();
        $title = $general_query_results['page_title'];
        $books = $general_query_results['query_result'];
    }
} else {

    $general_query_results = generalQuery();
    $title = $general_query_results['page_title'];
    $books = $general_query_results['query_result'];
}

// Query genre list
$genres = queryGenreList();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= esc($title) ?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div class="util">

    </div>

    <div id="header">

        <nav>
            <img id="logo" src="images/logo.jpg" alt="logo" />
            <ul>
                <li class="current"><a href="index.php">home</a></li>
                <li>
                    <a href="index.php">books</a>
                </li>
                <li>
                    <a href="index.php">about</a>
                </li>
                <li>
                    <a href="index.php">contact</a>
                </li>
            </ul>

        </nav>
    </div><!-- /#header -->


    <div class="container">


        <div class="header_img">
            <img src="images/header.jpg" alt="header" />
        </div>
        <div class="search">

            <form action="index.php" method="get" autocomplete="off" novalidate>
                <input id="search" type="text" name="search" maxlength="255" />&nbsp;
                <input type="submit" value="search" />
                <div>
                    <ul id="live_search"></ul>
                </div>
            </form>

        </div><!-- /.search -->

        <hr class="clear" />

        <div class="content">

            <h1><?= esc($title) ?></h1>


            <div class="categories">

                <h3>Categories</h3>

                <ul>
                    <?php foreach ($genres as $genre) : ?>
                    <li><a href="index.php?genre_id=<?= esc_attr($genre['id']) ?>">
                            <?= esc($genre['genre']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="shelf">

                <?php foreach ($books as $book) : ?>

                <div class="book">

                    <div class="img">
                        <img src="./images/covers/<?= esc_attr($book['image']) ?>"
                            alt="<?= esc_attr($book['title']) ?>" />
                    </div>
                    <div class="details">
                        <p><strong><?= esc($book['title']) ?></strong><br />
                            by <a
                                href="index.php?author_id=<?= esc_attr($book['author_id']) ?>"><?= esc($book['author']) ?></a><br />
                            <span><?= esc($book['genre']) ?></span>, <?= esc($book['num_pages']) ?> pages,
                            <?= esc($book['year_published']) ?>, $<?= esc($book['price']) ?>
                        </p>

                        <p>
                            <?= html($book['book_description']) ?>
                        </p>
                    </div>

                </div><!-- /.book -->

                <?php endforeach; ?>
            </div><!-- /.shelf -->

        </div><!-- /content -->

    </div><!-- /.container -->

    <div id="footer">

        <p><a href="index.php">Home</a> |
            <a href="index.php">Books</a> |
            <a href="index.php">About</a> |
            <a href="index.php">Contact</a>

        <p>Content copyright by Big Book Site - all rights reserved.</p>

    </div><!-- /footer -->

</body>

</html>