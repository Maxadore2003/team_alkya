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

            // Demander à la base de donnée toutes les pages actualités
            $request_news = $db->prepare("SELECT * FROM `actuality`");
            $request_news->execute();
            $count_news = $request_news->rowCount();

            // Passer x fois 6 news pour aller a la page correspondante
            for ($i=0; $i < $_GET['page'] * 6; $i++) { 
                $request_news->fetch();
            }

        ?>

        <?php include "./includes/header.php"; ?>

        <div class="content">

            <!-- <h1>Actualités</h1> -->
            
            <!-- Titre -->
            <div class='title'> 
                <h1><?php echo $data_news_title['description']?></h1>
            </div>

            <div class='d-flex text-center flex-wrap news'>
                <?php
                    while($data_news = $request_news -> fetch() and $news_count < 6 ) {?>
                    <div class='newsDetails'>
                        <a href="./article.php?id=<?php echo $data_news["id"] ?>"><img src='img/<?php echo $data_news['image']?>' alt='actus, <?php echo $data_news['image']?>'></a>
                        <h2><?php echo $data_news["title"] ?></h2>
                    </div>
                <?php
                    $news_count += 1;
                    }
                ?> 
            </div>

            <div class="squares">
                <?php for ($i=0; $i < (int)($count_news / 6 ) + 1; $i++) { ?>
                    <div class="square text-center">
                        <a href="./news.php?page=<?php echo $i ?>" ><?php echo $i + 1 ?></a>
                    </div>
                <?php } ?>
            </div>

            <?php include "./includes/sponsors.php" ?>
            
        </div>

        <?php include "./includes/footer.php"; ?>

    </body>

</html>