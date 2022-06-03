<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_user = $db->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $request_user->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_user->execute();
    $data_user = $request_user -> fetch()
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
        <title>Confirmation suppression compte</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>


        <div class="account-management d-flex text-center">
            <p>ID du compte</p>
            <p>Identifiant du compte</p>
            <p>Nom</p>
            <p>Prénom</p>
            <p>Mot de passe</p>
            <p>Niveau d'administration</p>
        </div>

        <div class="account-management d-flex text-center">
            <p><?php echo $data_user['id'] ?></p>
            <p><?php echo $data_user['pseudo'] ?></p>
            <p><?php echo $data_user['name'] ?></p>
            <p><?php echo $data_user['firstname'] ?></p>
            <p><?php echo $data_user['password'] ?></p>
            <p><?php echo $data_user['admin-level'] ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce compte. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_account.php?awnser=yes&id=1">Oui</a>
            <a class="no" href="./delete_account.php?awnser=no&id=1">Non</a>
        </div>

    </body>

</html>