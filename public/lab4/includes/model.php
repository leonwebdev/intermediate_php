<?php

// require config
require __DIR__ . '/config.php';

$title = 'Some Books you might like...';

$query = "SELECT 
            book.id as id,
            book.title as title,
            book.num_pages as num_pages,
            book.year_published as year_published,
            author.name as author,
            genre.name as genre,
            book.price as price,
            book.description as book_description,
            book.image as image
            FROM 
            book
            INNER JOIN author ON book.author_id = author.id
            INNER JOIN genre ON book.genre_id = genre.id
            INNER JOIN format ON book.format_id = format.id
            INNER JOIN publisher ON book.publisher_id = publisher.id
            ";

$stmt = $dbh->query($query);

$results = $stmt->fetchAll();

// var_dump($results);