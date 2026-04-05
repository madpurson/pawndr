<html>
    <head>
        <title>Animals</title>
    </head>
    <body>
        <a href="<?php echo base_url('animals'); ?>">
            <button>Back to List</button>
        </a>
        <h1><?php echo $animal['name']; ?></h1>
        
        <ul>
            
            <li>
                <img src="<?php echo $animal['image_url']; ?>" alt="<?php echo $animal['name']; ?>" width="100">
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

    </body>
</html>