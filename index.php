<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web development'
];

$person['name'] = 'Jeffrey';

unset($person['age']);

var_dump($person);

require 'index.view.php';



