<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les jeux pour les compter
    $request_game = $db->prepare("SELECT * FROM `game`");
    $request_game->execute();
    $count_game = $request_game->rowCount();
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
        <title>Ajouter un Jeu</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom</p>
            <p class="ten">Logo</p>
            <p class="ten">Image Bannière</p>
        </div>
        
        <form method='post' action="./add_game.php">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo htmlspecialchars($count_game, ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="name">
                <input class="ten text-center" type="text" name="logo">
                <input class="ten text-center" type="text" name="image">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>