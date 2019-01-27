<?php


require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

$tasks = array_map(function ($task) {
    $t = new Task();

    $t->description
})

die(var_dump($tasks));

