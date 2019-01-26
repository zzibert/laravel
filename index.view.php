<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dcoument</title>
    </head>
    <body>
        <ul>
            <?php foreach ($tasks as $task) : ?>
                <li><?= $task->description ?></li>
                <li><?=$task->isComplete ? "completed!" : "not completed!"()?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>