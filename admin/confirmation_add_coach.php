<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_coach = $db->prepare("SELECT * FROM `player`");
    $request_coach->execute();
    $count_coach = $request_coach->rowCount();

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
        <title>Ajouter un Coach</title>
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
            <b>Les dates ont la forme : yyyy-mm-dd </b>
            <b>La taille se fait en cm</b>
            <b>Le poids se fait en kb</b>
        </div>


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
        </div>
        
        <form method='post' action="add_coach.php">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value="<?php echo $count_coach?>">
                <input class="text-center" type="text" name="name">
                <input class="text-center" type="text" name="firstname">
                <input class="text-center" type="text" name="nickname">
                <input class="text-center" type="text" name="nationality">
                <input class="five text-center" type="date" name="birthday">
                <input class="text-center" type="text" name="city">
                <input class="text-center" type="text" name="size">
                <input class="text-center" type="text" name="weight">
                <input class="five text-center" type="date" name="team-arrival">
                <input class="text-center" type="text" name="game-id">
                <input class="text-center" type="text" name="image">
                <input class="text-center" type="text" name="twitter">
                <input class="text-center" type="text" name="instagram">
                <input class="text-center" type="text" name="twitch">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>