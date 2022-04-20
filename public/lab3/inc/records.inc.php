<?php

// if (!isset($_COOKIE['tracker'])) {
//     setcookie('tracker', '');
// }

$tracker = json_decode($_COOKIE['tracker'] ?? '', JSON_OBJECT_AS_ARRAY) ?? [[
    'title' => '',
    'file' => '',
]];

// for ($i = sizeof($tracker) - 1; $i > sizeof($tracker) - 10 && $i > 0; $i--) {

//     echo '<p>';
//     // echo $i;
//     // print_r($tracker);
//     // die;
//     echo '<a class = "plain_a" href = "' . $tracker[$i]['file'] . '">' . $tracker[$i]['title'] . '</a>';
//     echo '</p>';
// }

$push_array = [
    'title' => $title,
    'file' => $file,
];

// echo '<pre>';
// print_r($push_array);

// echo '<pre>';
// print_r($tracker);

array_push($tracker, $push_array);

// echo '<pre>';
// print_r($tracker);

setcookie('tracker', json_encode($tracker, JSON_FORCE_OBJECT));

// echo '<pre>';
// print_r($_COOKIE['tracker']);