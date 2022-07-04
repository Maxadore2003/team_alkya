<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_player_coach = $db->prepare("SELECT * FROM `player` WHERE `id` = :id");
    $request_player_coach->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_player_coach->execute();
    $data_player_coach = $request_player_coach -> fetch();
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
        <title>Confirmation suppression <?php echo htmlspecialchars($_GET['type'], ENT_QUOTES)?></title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>


        <div class="account-management d-flex text-center">
            <p class="text-center">ID</p>
            <p class="text-center">Nom</p>
            <p class="text-center">Prénom</p>
            <p class="text-center">Pseudo</p>
            <p class="text-center">Nationalité</p>
            <p class="five text-center">Anniversaire</p>
            <p class="text-center">Ville de Naissance</p>
            <p class="text-center">Taille</p>
            <p class="text-center">Poids</p>
            <p class="five text-center">Date d'arrivée</p>
            <p class="text-center">ID du jeu</p>
            <p class="text-center">Image</p>
            <p class="text-center">Pseudo Twitter</p>
            <p class="text-center">Pseudo Instagram</p>
            <p class="text-center">Pseudo Twitch</p>
            <?php
            if($_GET['type'] == "player") {
                ?><p class="text-center">Game Stats</p>
            <?php
            }
            ?>
        </div>

        <div class="account-management d-flex text-center">
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['id'], ENT_QUOTES) ?></p>
            <p class="five text-center"><?php echo htmlspecialchars($data_player_coach['name'], ENT_QUOTES) ?></p>
            <p class="five text-center"><?php echo htmlspecialchars($data_player_coach['firstname'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['nickname'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['nationality'], ENT_QUOTES) ?></p>
            <p class="five text-center"><?php echo htmlspecialchars($data_player_coach['birthday'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['city'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['size'], ENT_QUOTES) / 100 ?> m</p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['weight'], ENT_QUOTES) ?> kg</p>
            <p class="five text-center"><?php echo htmlspecialchars($data_player_coach['team-arrival'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['game-id'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['image'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['twitter'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['instagram'], ENT_QUOTES) ?></p>
            <p class="text-center"><?php echo htmlspecialchars($data_player_coach['twitch'], ENT_QUOTES) ?></p>
            <?php
            if($_GET['type'] == "player") {
                ?><p class="text-center"><?php echo htmlspecialchars($data_player_coach['game-stats'], ENT_QUOTES) ?></p>
            <?php
            }
            ?>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce <?php echo htmlspecialchars($_GET['type'], ENT_QUOTES)?>. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_player_coach.php?&id=<?php echo htmlspecialchars($_GET["id"], ENT_QUOTES) ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>
