<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_team = $db->prepare("SELECT * FROM `team` WHERE `id` = :id");
    $request_team->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_team->execute();
    $data_team = $request_team -> fetch();

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
        <title>Confirmation modification Equipe</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

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
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_team['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['game-id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_team['image'], ENT_QUOTES) ?></p>
        </div>
        
        <form method='post' action="edit_team.php?id=<?php echo htmlspecialchars($data_team['id'], ENT_QUOTES) ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo  htmlspecialchars($data_team['id'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="game-id" value="<?php echo  htmlspecialchars($data_team['game-id'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="name" value="<?php echo  htmlspecialchars($data_team['name'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo  htmlspecialchars($data_team['image'], ENT_QUOTES) ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>