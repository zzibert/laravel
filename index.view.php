<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>Description: <?= $task->description; ?>, completed: <?= $task->isComplete() ? "completed" : "uncomplete!";?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>