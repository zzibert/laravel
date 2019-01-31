<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>
        <ul>
            <?php foreach ($person as $key => $value) : ?>
                <li><?= 'the ' . $key . ' is ' . $value?></li>
            <?php endforeach ?>
        </ul>
    </h1>
</body>
</html>