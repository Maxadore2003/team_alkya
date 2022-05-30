<?php

    include './includes/database.php';
    $article_id = $_GET['id'];
    $request_article = $db->prepare("SELECT * FROM `actuality` WHERE `id` = $article_id");
    $request_article->execute();
    $article_count = $request_article->rowCount();
    $data_article = $request_article->fetch();


?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/article.css">
        <title>Article</title>
    </head>

    <body>

        <?php include 'includes/header.php'; ?>



        <div class="content">
            <?php
            if( $article_count <= 0 )
            {
                ?>
                <div class="article-description text-center">
                    <p class='error-text text-center'>Sorry, the news doesn't exist...</p>
                    <p class='text-center'>Désolé, L'article n'existe pas...</p>
                </div>
                <?php
            }
            else {
            ?>
            <div class="illustration text-center">
                <img src="./img/<?php echo $data_article["image"]; ?>" alt="Article, News, Alkya, team esport, structure esport, <?php echo $data_article["image"]?>">
            </div>
            
            <div class="article-description text-center">
                <h2><?php echo $data_article["title"]; ?></h2>
                <p><?php echo $data_article["description"]; ?></p>
            </div>
            <?php
            }
            ?>
        </div>

        <?php include 'includes/sponsors.php' ?>
        <?php include 'includes/footer.php'?>
    </body>

</html>