<html>
    <head>
        <title>Animals</title>
    </head>
    <body>
        <h1>Animals</h1>
        
        <?php foreach ($animals as $animal): ?>
        <ul>
            <li>
                <a href="<?php echo base_url('animals/view/' . $animal['id']); ?>">
                    <img src="<?php echo $animal['image_url']; ?>" alt="<?php echo $animal['name']; ?>" width="100">
                </a>
                <br>
                <?php echo $animal['name']; ?>
                <br>
                <span> <?php echo $animal['type']; ?> </span>
            </li>
            <li>
                <?php echo $animal['description']; ?>
            </li>
            <li>
                Breed: <?php echo $animal['breed']; ?>
            </li>
            <li>
                Age: <?php echo $animal['age']; ?>
            </li>
            <li>
                Sex: <?php echo $animal['sex']; ?>
            </li>
            <hr>
        </ul>
        <?php endforeach; ?>
        
    </body>
</html>