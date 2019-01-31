<?php

$task = [
    'title' => 'finish homework',
    'due' => 'today',
    'assigned_to' => 'myself',
    'completed' => false
];

function dd($array) {
    echo '<pre>';
    var_dump($array);
    echo '</pre>';
};



 require './index.view.php';