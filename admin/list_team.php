<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_team = $db->prepare("SELECT * FROM `game`");
    $request_team->execute();
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

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom du jeu</p>
            <p class="ten">Image Bannière</p>
            <p class="ten">Image Logo du jeu</p>
            <p class="ten">Image de l'équipe</p>
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
            <p class="five"><?php echo $data_team['id'] ?></p>
            <p class="ten"><?php echo $data_team['name'] ?></p>
            <p class="ten"><?php echo $data_team['global-image'] ?></p>
            <p class="ten"><?php echo $data_team['logo-image'] ?></p>
            <p class="ten"><?php echo $data_team['team-image'] ?></p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><a class="ten" href='./confirmation_edit_team.php?id=<?php echo $data_team['id'] ?>'>Modifier</a><?php
            }
            else {
                ?><a class="ten" href='./confirmation_delete_team.php?id=<?php echo $data_team['id'] ?>'>Supprimer</a><?php
            }
            ?>
        </div>
        <?php
            }
        ?>
    </body>

</html>