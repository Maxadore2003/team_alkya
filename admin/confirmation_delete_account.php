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
            <p>Niveau d'administration</p>
        </div>

        <div class="account-management d-flex text-center">
            <p><?php echo htmlspecialchars($data_user['id'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['pseudo'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['name'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['firstname'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['admin-level'], ENT_QUOTES) ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce compte. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_account.php?&id=<?php echo htmlspecialchars($_GET["id"], ENT_QUOTES) ?>">Oui</a>
            <a class="no" href="./admin_account_management.php">Non</a>
        </div>

    </body>

</html>