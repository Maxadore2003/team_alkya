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
        <title>Confirmation modification compte</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <p>
                Le Niveau d'administration est soit 1 pour les utilisateurs lambda soit 2 pour les administrateurs
            </p>
            <div class="text-center">
                <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
            </div>
        </div>
        


        <div class="account-management d-flex text-center">
            <p>ID du compte</p>
            <p>Identifiant du compte</p>
            <p>Nom</p>
            <p>Prénom</p>
            <p>Mot de passe</p>
            <p>Niveau d'administration</p>
        </div>

        <div class="account-management d-flex text-center">
            <p><?php echo htmlspecialchars($data_user['id'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['pseudo'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['name'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['firstname'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['password'], ENT_QUOTES) ?></p>
            <p><?php echo htmlspecialchars($data_user['admin-level'], ENT_QUOTES) ?></p>
        </div>
        
        <form method='post' action="edit_account.php?id=<?php echo $data_user['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value="<?php echo $data_user['id'] ?>">
                <input class="text-center" type="text" name="pseudo" value="<?php echo $data_user['pseudo'] ?>">
                <input class="text-center" type="text" name="name" value="<?php echo $data_user['name'] ?>">
                <input class="text-center" type="text" name="firstname" value="<?php echo $data_user['firstname'] ?>">
                <input class="text-center" type="password" name="password" value="<?php echo $data_user['password'] ?>">
                <input class="text-center" type="text" name="admin-level" value="<?php echo $data_user['admin-level'] ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>