<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/news.css">
        <link rel="stylesheet" href="./css/sponsors.css">
        <link rel="stylesheet" href="./css/footer.css">
        <title>Actualités</title>
    </head>

    <body>

        <?php
        
            include "./includes/database.php";

            $news_count = 0;

            // Demander à la base de donnée le titre de la page actualités
            $request_news_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'actuality'");
            $request_news_title->execute();
            $data_news_title = $request_news_title -> fetch();

            // Demander à la base de donnée la description des images de la pages actus
            $request_description_image = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'description' AND `name` = 'description-image'");
            $request_description_image->execute();
            $data_description_image = $request_description_image -> fetch();

            // Demander à la base de donnée les 6 images de la page actualités
            $request_news = $db->prepare("SELECT * FROM `actuality`");
            $request_news->execute();

        ?>

        <?php include "./includes/header.php"; ?>

        <div class="content">

            <!-- <h1>Actualités</h1> -->
            
            <!-- Titre -->
            <div class='title'> 
                <h1><?php echo $data_news_title['description']?></h1>
            </div>

            <!-- Les 6 images de la page actualités -->
            <div class='d-flex gap-3 text-center flex-wrap news'>
                <?php
                    while($data_news = $request_news -> fetch() and $news_count < 6 ) {?>
                    <div class='newsImage'>
                        <a href="./article.php?id=<?php echo $data_news["id"] ?>"><img src='img/<?php echo $data_news['image']?>' alt='actus, <?php echo $data_news['image']?>'></a>
                    </div>
                <?php
                    $news_count += 1;
                    }
                ?> 
            </div>

            <!-- Description Images -->
            <div class='description-image'> 
                <p><?php echo $data_description_image['description']?></p>
            </div>

            <div class="squares">
                <div class="square">
                    <p>1</p>
                </div>
                <div class="square">
                    <p>2</p>
                </div>
                <div class="square">
                    <p>3</p>
                </div>
                <div class="square">
                    <p>4</p>
                </div>
                <div class="square">
                    <p>5</p>
                </div>
            </div>

            <?php include "./includes/sponsors.php" ?>
            
        </div>

        <?php include "./includes/footer.php"; ?>

    </body>

</html>