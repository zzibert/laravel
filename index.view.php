<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dcoument</title>
    </head>
    <body>
        <ul>
            <?php foreach ($person as $key => $value) : ?>

                <li><?= $key . " => " . $value; ?></li>

            <?php endforeach; ?>
        </ul>
        
    </body>
</html>