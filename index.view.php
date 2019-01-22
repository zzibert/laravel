<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dcoument</title>
    </head>
    <body>
        <ul>
            <?php 
                foreach($names as $name) {
                    echo "<li>$name</li>";
                }
            ?>
        </ul>
        
    </body>
</html>