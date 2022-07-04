<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_users = $db->prepare("SELECT * FROM `users`");
    $request_users->execute();
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
        <title>Gestion Comptes</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p>ID du compte</p>
            <p>Identifiant du compte</p>
            <p>Modifier un compte</p>
            <p>Supprimer un compte</p>
        </div>

        <?php
            while($data_users = $request_users -> fetch()){
        ?>
        <div class="account-management d-flex text-center">
            <p><?php echo htmlspecialchars($data_users['id'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_users['pseudo'], ENT_QUOTES) ?></p>
            <a href='./confirmation_edit_account.php?id=<?php echo htmlspecialchars($data_users['id'], ENT_QUOTES) ?>'>Modifier</a>
            <a href='./confirmation_delete_account.php?id=<?php echo htmlspecialchars($data_users['id'], ENT_QUOTES) ?>'>Supprimer</a>
        </div>
        <?php
            }
        ?>
        <div class="confirmation text-center">
            <a href="./confirmation_add_account.php">Ajouter</a>
        </div>
    </body>

</html>