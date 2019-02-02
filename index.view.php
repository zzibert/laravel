<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>Description: <?= $task->description; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>