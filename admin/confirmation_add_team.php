<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_team = $db->prepare("SELECT * FROM `team`");
    $request_team->execute();
    $count_team = $request_team->rowCount();

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
        <title>Ajouter une Equipe</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom du jeu</p>
            <p class="ten">Bannière</p>
            <p class="ten">Logo du jeu</p>
            <p class="ten">Image de l'équipe</p>
        </div>
        
        <form method='post' action="./add_team.php">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo $count_team ?>">
                <input class="ten text-center" type="text" name="name">
                <input class="ten text-center" type="text" name="global-image">
                <input class="ten text-center" type="text" name="logo-image">
                <input class="ten text-center" type="texte" name="team-image">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>