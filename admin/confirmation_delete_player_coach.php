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
        <title>Confirmation suppression <?php echo $_GET['type']?></title>
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
            <p class="text-center"><?php echo $data_player_coach['id'] ?></p>
            <p class="five text-center"><?php echo $data_player_coach['name'] ?></p>
            <p class="five text-center"><?php echo $data_player_coach['firstname'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['nickname'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['nationality'] ?></p>
            <p class="five text-center"><?php echo $data_player_coach['birthday'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['city'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['size'] / 100 ?> m</p>
            <p class="text-center"><?php echo $data_player_coach['weight'] ?> kg</p>
            <p class="five text-center"><?php echo $data_player_coach['team-arrival'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['game-id'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['image'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['twitter'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['instagram'] ?></p>
            <p class="text-center"><?php echo $data_player_coach['twitch'] ?></p>
            <?php
            if($_GET['type'] == "player") {
                ?><p class="text-center"><?php echo $data_player_coach['game-stats'] ?></p>
            <?php
            }
            ?>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce <?php echo $_GET['type']?>. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_player_coach.php?&id=<?php echo $_GET["id"] ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>
