<html>
    <head>
        <title>Animals</title>
    </head>
    <body>
        <h1>Animals</h1>
        <ul>
            <?php foreach ($animals as $animal): ?>
                <li><?php echo $animal['name']; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>