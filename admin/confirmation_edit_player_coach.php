<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_player = $db->prepare("SELECT * FROM `player` WHERE `id` = :id");
    $request_player->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_player->execute();
    $data_player = $request_player -> fetch()
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
        <title>Confirmation modification <?php echo $_GET["type"]?></title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="account-management d-flex text-center">
            <p class="text-center">ID</p>
            <p class="five text-center">Nom</p>
            <p class="five text-center">Prénom</p>
            <p class="text-center">Pseudo</p>
            <p class="text-center">Nationalité</p>
            <p class="five text-center">Anniversaire</p>
            <p class="text-center">Ville de Naissance</p>
            <p class="text-center">Taille</p>
            <p class="text-center">Poids</p>
            <p class="five text-center">Date d'arrivée</p>
            <p class="text-center">ID de sa team</p>
            <p class="text-center">Image</p>
            <p class="text-center">Pseudo Twitter</p>
            <p class="text-center">Pseudo Instagram</p>
            <p class="text-center">Pseudo Twitch</p>
            <?php
            if($_GET['type'] == "player") {
                ?><p class="five text-center">Lien de ses stats</p>
            <?php
            }
            ?>
        </div>
        
        <form method='post' action="edit_player_coach.php?id=<?php echo $data_player['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value="<?php echo $data_player['id']?>">
                <input class="text-center" type="text" name="name" value="<?php echo $data_player['name']?>">
                <input class="text-center" type="text" name="firstname" value="<?php echo $data_player['firstname']?>">
                <input class="text-center" type="text" name="nickname" value="<?php echo $data_player['nickname']?>">
                <input class="text-center" type="text" name="nationality" value="<?php echo $data_player['nationality']?>">
                <input class="text-center" type="date" name="birthday" value="<?php echo $data_player['birthday']?>">
                <input class="text-center" type="text" name="city" value="<?php echo $data_player['city']?>">
                <input class="text-center" type="text" name="size" value="<?php echo $data_player['size']?>">
                <input class="text-center" type="text" name="weight" value="<?php echo $data_player['weight']?>">
                <input class="text-center" type="date" name="team-arrival" value="<?php echo $data_player['team-arrival'] ?>">
                <input class="text-center" type="text" name="game-id" value="<?php echo $data_player['game-id'] ?>">
                <input class="text-center" type="text" name="image" value="<?php echo $data_player['image'] ?>">
                <input class="text-center" type="text" name="twitter" value="<?php echo $data_player['twitter'] ?>">
                <input class="text-center" type="text" name="instagram" value="<?php echo $data_player['instagram'] ?>">
                <input class="text-center" type="text" name="twitch" value="<?php echo $data_player['twitch'] ?>">
                <?php
                if($_GET['type'] == "player") {
                    ?><input class="text-center" type="text" name="game-stats" value="<?php echo $data_player['game-stats'] ?>">
                <?php
                }
                ?>
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>