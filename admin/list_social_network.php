<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_social_network = $db->prepare("SELECT * FROM `social-network`");
    $request_social_network->execute();
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
        <title>Gestion Reseaux Sociaux</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom</p>
            <p class="ten">Image</p>
            <p class="ten">Link</p>
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
            while($data_social_network = $request_social_network -> fetch()){
        ?>
        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_social_network['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['image'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['link'], ENT_QUOTES) ?></p>
            <?php
            if($_GET['mode'] == "edit") {
                ?><a class="ten" href='./confirmation_edit_social_network.php?id=<?php echo htmlspecialchars($data_social_network['id'], ENT_QUOTES) ?>'>Modifier</a><?php
            }
            else {
                ?><a class="ten" href='./confirmation_delete_social_network.php?id=<?php echo htmlspecialchars($data_social_network['id'], ENT_QUOTES) ?>'>Supprimer</a><?php
            }
            ?>
        </div>
        <?php
            }
        ?>
    </body>

</html>