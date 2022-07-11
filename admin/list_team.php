<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_team = $db->prepare("SELECT * FROM `team`");
    $request_team->execute();

    // Demander à la base de donnée tous les jeux
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
        <title>Gestion Equipes</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <b>Les ID des jeux sont : </b>
            <?php 
            while ($data_game = $request_game->fetch()) {
                ?>
                <p><?php echo htmlspecialchars($data_game["id"], ENT_QUOTES)?> : <?php echo htmlspecialchars($data_game["name"], ENT_QUOTES)?></p><?php
            }
            ?>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Game-ID</p>
            <p class="ten">Name</p>
            <p class="ten">Image</p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><p class="ten">Modifier</p><?php
            }
            else {
                ?><p class="ten">Supprimer</p><?php
            }
            ?>
        </div>

        <?php
            while($data_team = $request_team -> fetch()){
        ?>
        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_team['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['game-id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['image'], ENT_QUOTES) ?></p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><a class="ten" href='./confirmation_edit_team.php?id=<?php echo htmlspecialchars($data_team['id'], ENT_QUOTES) ?>'>Modifier</a><?php
            }
            else {
                ?><a class="ten" href='./confirmation_delete_team.php?id=<?php echo htmlspecialchars($data_team['id'], ENT_QUOTES) ?>'>Supprimer</a><?php
            }
            ?>
        </div>
        <?php
            }
        ?>
    </body>

</html>