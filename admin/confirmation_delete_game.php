<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les game
    $request_game = $db->prepare("SELECT * FROM `game` WHERE `id` = :id");
    $request_game->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_game->execute();
    $data_game = $request_game -> fetch()
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
        <title>Confirmation suppression Jeu</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>


        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom</p>
            <p class="ten">Logo</p>
            <p class="ten">Image Bannière</p>
            <p class="ten">Liens vers les statistiques</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_game['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_game['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_game['logo'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_game['image'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_game['stats'], ENT_QUOTES) ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce jeu. Il sera impossible de la récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_game.php?&id=<?php echo htmlspecialchars($_GET["id"], ENT_QUOTES) ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>