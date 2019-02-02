<?php

function dd($val){
    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';
}

function connnectToDB() {
    try {
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=trolo', 'root', '');
    } catch (PDOExpection $e) {
        die('could not connect!');
    }
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}