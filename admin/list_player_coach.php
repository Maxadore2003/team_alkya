<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les player ou coach
    if ($_GET['type'] == "coach") {
        $request_player_coach = $db->prepare("SELECT * FROM `player` WHERE `type` = 'coach'");
    }
    else if ($_GET['type'] == "player") {
        $request_player_coach = $db->prepare("SELECT * FROM `player` WHERE `type` = 'player'");
    }
    $request_player_coach->execute();

    // Demander à la base de donnée tous les jeux et leur ID
    $request_game = $db->prepare("SELECT * FROM `game`");
    $request_game->execute();
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
        <title>Gestion <?php echo $_GET["type"]?></title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <b>Les ID des jeux sont : </b>
            <?php 
            while ($data_game = $request_game->fetch()) {
                ?><p><?php echo $data_game["id"]?> : <?php echo $data_game["name"]?></p><?php
            }
            ?>
            <b>La taille se fait en cm</b> <br>
            <b>Le poids se fait en kg</b>
        </div>

        <div class="account-management d-flex text-center">
            <p class="text-center">ID</p>
            <p class="five text-center">Nom</p>
            <p class="five text-center">Prénom</p>
            <p class="text-center">Pseudo</p>
            <p class="text-center">Nationalité</p>
            <p class="five text-center">Anniversaire</p>
            <p class="text-center">Ville de Naissance</p>
            <p class="text-center">Taille</p>
            <p class="text-center">Poids</p>
            <p class="five text-center">Date d'arrivée</p>
            <p class="text-center">ID de sa team</p>
            <p class="text-center">Image</p>
            <p class="text-center">Pseudo Twitter</p>
            <p class="text-center">Pseudo Instagram</p>
            <p class="text-center">Pseudo Twitch</p>
            <?php
            if($_GET['type'] == "player") {
                ?><p class="five text-center">Lien de ses stats</p>
            <?php
            }
            if($_GET['mode'] == "edit") {
                ?><p class="text-center">Modifier</p><?php
            }
            else {
                ?><p class="text-center">Supprimer</p><?php
            }
            ?>
        </div>

        <?php
            while($data_player_coach = $request_player_coach -> fetch()){
        ?>
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
                ?><p class="five text-center"><?php echo $data_player_coach['game-stats'] ?></p>
            <?php
            }
            if($_GET['mode'] == "edit") {
                ?><a class="text-center" href='./confirmation_edit_player_coach.php?id=<?php echo $data_player_coach['id'] ?>&type=<?php echo $_GET["type"]?>'>Modifier</a><?php
            }
            else {
                ?><a class="text-center" href='./confirmation_delete_player_coach.php?id=<?php echo $data_player_coach['id'] ?>&type=<?php echo $_GET["type"]?>'>Supprimer</a><?php
            }
            ?>
        </div>
        <?php
            }
        ?>
    </body>

</html>