<?php 
    include __DIR__ . "/dischi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
        <title>Ajax dischi</title>
        <link rel="stylesheet" href="dist/css/style.css">
    </head>
    <body>
        <?php 
            foreach ($albums as $album) {?>
                <img src="<?php echo $album["poster"]; ?>" alt="">
                <h2><?php echo $album["title"]; ?></h2>
                <span><?php echo $album["author"]; ?></span>
                <span><?php echo $album["year"]; ?></span>
           <?php }
        ?>
    </body>
</html>