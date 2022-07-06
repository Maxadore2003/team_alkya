<?php

    include 'includes/database.php';
    // Demander à la base de donnée toutes les données des jeux
    $request_games = $db->prepare("SELECT * FROM `game`");
    $request_games->execute();
    
    // Demander à la base de donnée le titre de teams
    $request_teams_title = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams' AND `type` = 'title'");
    $request_teams_title->execute();
    $data_teams_title = $request_teams_title->fetch();
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/teams.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Équipes</title>
    </head>

    <body>

        <?php include "includes/header.php"; ?>

        <div class="title">
            <h3><?php echo htmlspecialchars($data_teams_title['description'], ENT_QUOTES) ?></h3>
        </div>

        <div class="teams d-flex flex-wrap text-center">
            <?php while ($data_games = $request_games->fetch()) {
            ?>
            <a class="team" href="./teams_sheet.php?game=<?php echo htmlspecialchars($data_games['id'], ENT_QUOTES)?>" style="background-image: url(./img/<?php echo htmlspecialchars($data_games['team-image'], ENT_QUOTES)?>)">
                <img src="img/<?php echo htmlspecialchars($data_games['logo-image'], ENT_QUOTES)?>" alt="Logo <?php echo htmlspecialchars($data_games['name'], ENT_QUOTES)?>, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_games['logo-image'], ENT_QUOTES)?>">
            </a>
            <?php
            }
            ?>

        </div>

        <?php include "includes/sponsors.php"; ?>
        <?php include "includes/footer.php"; ?>
        
    </body>

</html>