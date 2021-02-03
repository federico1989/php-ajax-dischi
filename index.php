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
        <!-- Versione php -->
        <header>
            <div class="container d-flex">
                <img src="dist/img/logo.png" alt="logo"/>
                <div class="d-flex">
                    <img src="dist/img/php.png" alt="logo"/>
                    <h1>Version</h1>
                </div>
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
            <!-- Versione Vue -->
            <section>
            <div class="container d-flex">
                <img src="dist/img/logo.png" alt="logo"/>
                <div class="d-flex">
                    <img src="dist/img/vue.png" alt="logo"/>
                    <h1>Version</h1>
                </div>
            </div>
            </section>
            <div id="root" class="cds-container container">
                <div class="cd" v-for="album in dischi">
                    <img :src="album.poster" alt="">
                    <h2>{{album.title}}</h2>
                    <span class="author">{{album.author}}</span>
                    <span class="year">{{album.year}}</span>
                </div>
            </div>
        </main>

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>