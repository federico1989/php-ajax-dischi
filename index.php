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
        <link rel="stylesheet" href="./dist/css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="dist/img/logo.png" alt="logo" />
            </div>
        </header>
        <main>
            <div class="cds-container container">
                <?php 
                    foreach ($albums as $album) {?>
                        <div class="cd">
                            <img src="<?php echo $album["poster"]; ?>" alt="">
                            <h2><?php echo $album["title"]; ?></h2>
                            <span class="author"><?php echo $album["author"]; ?></span>
                            <span class="year"><?php echo $album["year"]; ?></span>
                        </div>
                    <?php }
                    ?>
            </div>
        </main>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>