<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_users = $db->prepare("SELECT * FROM `users`");
    $request_users->execute();
    $count_users = $request_users->rowCount();

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
        <title>Ajouter un compte</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <p>
                Le Niveau d'administration est soit 1 pour les utilisateurs lambda soit 2 pour les administrateurs
            </p>
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>


        <div class="account-management d-flex text-center">
            <p>ID du compte</p>
            <p>Identifiant du compte</p>
            <p>Nom</p>
            <p>Prénom</p>
            <p>Mot de passe</p>
            <p>Niveau d'administration</p>
        </div>
        
        <form method='post' action="add_account.php">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value=<?php echo $count_users ?>>
                <input class="text-center" type="text" name="pseudo">
                <input class="text-center" type="text" name="name">
                <input class="text-center" type="text" name="firstname">
                <input class="text-center" type="password" name="password">
                <input class="text-center" type="text" name="admin-level" value="1">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>