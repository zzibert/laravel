<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Task for the day</h1>
    <?php foreach ($task as $key => $value) : ?>
        <?php if($key != 'completed') : ?>
            <li><?= ucwords($key) . ' is ' . $value?></li>
        <?php endif ?>
        <?php if($key == 'completed') : ?>
            <li><?= ucwords($key) . ' is ' . $task['completed'] ? "complete" : "incomplete"?></li>
        <?php endif ?>
    <?php endforeach ?>
</body>
</html>