<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'myself';

function dd($array) {
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
};

die(dd($person));

 require './index.view.php';