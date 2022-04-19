<?php

if (empty($_COOKIE['tracker'])) {
    setcookie('tracker', '');
}

var_dump($_COOKIE);

$tracker = json_decode($_COOKIE['tracker']);

var_dump($tracker);

for ($i = sizeof($tracker); $i < sizeof($tracker) - 10; $i--) {

    echo '<p>';
    echo 'tets';
    echo '</p>';
}

$push_array = [
    'title' => $title,
    'file' => $file,
];

array_push($tracker, $push_array);

setcookie('tracker', json_encode($tracker));