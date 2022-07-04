<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_news = $db->prepare("SELECT * FROM `actuality`");
    $request_news->execute();
?>


<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/header_admin.css">
        <link rel="stylesheet" href="../css/admin_account_management.css">
        <title>Gestion Articles</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Titre</p>
            <p class="ten">Image</p>
            <p class="twenty">Description</p>
            <p class="five">Date</p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><p class="five">Modifier</p><?php
            }
            else {
                ?><p class="five">Supprimer</p><?php
            }
            ?>
        </div>

        <?php
            while($data_news = $request_news -> fetch()){
        ?>
        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_news['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_news['title'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_news['image'], ENT_QUOTES) ?></p>
            <p class="twenty"><?php echo htmlspecialchars($data_news['description'], ENT_QUOTES) ?></p>
            <p class="five"><?php echo htmlspecialchars($data_news['date'], ENT_QUOTES) ?></p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><a class="five" href='./confirmation_edit_article.php?id=<?php echo htmlspecialchars($data_news['id'], ENT_QUOTES) ?>'>Modifier</a><?php
            }
            else {
                ?><a class="five" href='./confirmation_delete_article.php?id=<?php echo htmlspecialchars($data_news['id'], ENT_QUOTES) ?>'>Supprimer</a><?php
            }
            ?>
        </div>
        <?php
            }
        ?>
    </body>

</html>