<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dcoument</title>
    </head>
    <body>
        <h1>Task For The Day</h1>
        <ul>
            <?php foreach ($task as $heading => $value) : ?>
                <li>
                    Task Completed: <?= $task['completed'] ? "complete" : "not complete"; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>