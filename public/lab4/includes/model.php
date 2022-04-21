<?php

// require config
require __DIR__ . '/config.php';

/**
 * generalQuery query all books
 *
 * @return  array  return page-title and results in an array
 */
function generalQuery(): array
{

    global $dbh;

    $title = 'Some Books you might like...';

    $query = "SELECT 
            book.id as id,
            book.title as title,
            book.num_pages as num_pages,
            book.year_published as year_published,
            author.name as author,
            author.id as author_id,
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

    $output = [
        'page_title' => $title,
        'query_result' => $results,
    ];

    return $output;
}

/**
 * get all genre list
 *
 * @return  array   [return all genre list with genre-id and genre-name]
 */
function queryGenreList(): array
{
    global $dbh;

    $query = "SELECT 
            genre.id as id,
            genre.name as genre
            FROM 
            genre
            ";

    $stmt = $dbh->query($query);

    $results = $stmt->fetchAll();

    // var_dump($results);

    return $results;
}

/**
 * [query all books by genre-id]
 *
 * @param   string  $genre_id  [$genre_id input from $_GET]
 *
 * @return  array              [return page-title and results in an array]
 */
function queryByGenre(string $genre_id): array
{
    global $dbh;

    $query = "SELECT 
            book.id as id,
            book.title as title,
            book.num_pages as num_pages,
            book.year_published as year_published,
            author.name as author,
            author.id as author_id,
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

            WHERE 
            genre.id = :placeholder
            ";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':placeholder', $genre_id, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetchAll();

    // var_dump($results);
    $title = 'Books By Genre: ' . $results[0]['genre'];

    $output = [
        'page_title' => $title,
        'query_result' => $results,
    ];

    return $output;
}

/**
 * query all books by author-id
 *
 * @param   string  $author_id  $author_id input from $_GET
 *
 * @return  array               return page-title and results in an array
 */
function queryByAuthor(string $author_id): array
{
    global $dbh;

    $query = "SELECT 
            book.id as id,
            book.title as title,
            book.num_pages as num_pages,
            book.year_published as year_published,
            author.name as author,
            author.id as author_id,
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

            WHERE 
            author.id = :placeholder
            ";

    $stmt = $dbh->prepare($query);

    $stmt->bindValue(':placeholder', $author_id, PDO::PARAM_STR);

    $stmt->execute();

    $results = $stmt->fetchAll();

    // var_dump($results);
    $title = 'Books By Author: ' . $results[0]['author'];

    $output = [
        'page_title' => $title,
        'query_result' => $results,
    ];

    return $output;
}