<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_news = $db->prepare("SELECT * FROM `actuality`");
    $request_news->execute();
    $count_news = $request_news->rowCount();

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
        <title>Ajouter un article</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="account-management d-flex text-center">
            <p>ID</p>
            <p>Titre</p>
            <p>Image</p>
            <p>Description</p>
            <p>Date</p>
        </div>
        
        <form method='post' action="add_article.php">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value=<?php echo $count_news ?>>
                <input class="text-center" type="text" name="title">
                <input class="text-center" type="text" name="image">
                <input class="text-center" type="text" name="description">
                <input class="text-center" type="date" name="date">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>