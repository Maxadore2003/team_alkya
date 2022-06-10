<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_news = $db->prepare("SELECT * FROM `actuality` WHERE `id` = :id");
    $request_news->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_news->execute();
    $data_news = $request_news -> fetch()
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
        <title>Confirmation modification Article</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Titre</p>
            <p class="ten">Image</p>
            <p class="twenty">Description</p>
            <p class="five">Date</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo $data_news['id'] ?></p>
            <p class="ten"><?php echo $data_news['title'] ?></p>
            <p class="ten"><?php echo $data_news['image'] ?></p>
            <p class="twenty"><?php echo $data_news['description'] ?></p>
            <p class="five"><?php echo $data_news['date'] ?></p>
        </div>
        
        <form method='post' action="edit_article.php?id=<?php echo $data_news['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo $data_news['id'] ?>">
                <input class="ten text-center" type="text" name="title" value="<?php echo $data_news['title'] ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo $data_news['image'] ?>">
                <input class="twenty text-center" type="text" name="description" value="<?php echo $data_news['description'] ?>">
                <input class="five text-center" type="date" name="date" value="<?php echo $data_news['date'] ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>