<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb() {
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
    
        die('could not connect!');
    }
    return $pdo;
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    return $tasks;
}