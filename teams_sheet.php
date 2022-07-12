<?php 

    include './includes/database.php';

    // Demander à la base de donnée le titre de la partie Player
    $request_teams_player = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams-sheet-player' AND `type` = 'title'");
    $request_teams_player->execute();
    $data_teams_player = $request_teams_player->fetch();

    // Demander à la base de donnée le titre de la partie Coach
    $request_teams_coach = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams-sheet-coach' AND `type` = 'title'");
    $request_teams_coach->execute();
    $data_teams_coach = $request_teams_coach->fetch();

    // Demander à la base de donnée toutes les données de la team
    $request_games = $db->prepare("SELECT * FROM `team` WHERE `id` = :game");
    $request_games->bindParam(":game", $_GET["game"], PDO::PARAM_INT);
    $request_games->execute();
    $data_games = $request_games->fetch();

    // Demander à la base de donnée tous les joueurs de la team
    $request_player = $db->prepare("SELECT * FROM `player` WHERE `game-id` = :game AND `type` = 'player'");
    $request_player->bindParam(":game", $_GET["game"], PDO::PARAM_INT);
    $request_player->execute();

    // Demander à la base de donnée tous les coachs de la team
    $request_coach = $db->prepare("SELECT * FROM `player` WHERE `game-id` = :game AND `type` = 'coach'");
    $request_coach->bindParam(":game", $_GET["game"], PDO::PARAM_INT);
    $request_coach->execute();

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
        <link rel="stylesheet" href="css/teams_sheet.css">
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Fiche Équipes</title>
    </head>

    <body>

        <?php include "includes/header.php"; ?>

        <div class="illustration">
            <img src="img/<?php echo htmlspecialchars($data_games['image'], ENT_QUOTES) ?>" alt="Team, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_games['image'], ENT_QUOTES) ?>">
            <p><?php echo htmlspecialchars($data_games['name'], ENT_QUOTES) ?></p>
        </div>
        
        <div class="players-title text-right">
            <p><?php echo htmlspecialchars($data_teams_player['description'], ENT_QUOTES)?></p>
        </div>
        
        <div class="content">
            <div class="players d-flex flex-wrap">
                <?php 
                    while ($data_player = $request_player->fetch()) {
                ?>
                    <div class="player" style="background-image: url(./img/<?php echo htmlspecialchars($data_player['image'], ENT_QUOTES)?>);">
                        <a href="./player_sheet.php?player=<?php echo htmlspecialchars($data_player['id'], ENT_QUOTES)?>">
                            <div class="flag">
                                <img class="flag" id="" src="./img/<?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?>.png" alt="Drapeau, Alkya, team esport, structure esport">
                            </div>
                            <div class="description d-flex">
                                <div class="name">
                                    <p class="firstname"><?php echo htmlspecialchars($data_player['firstname'], ENT_QUOTES)?></p>
                                    <p class="nickname">"<?php echo htmlspecialchars($data_player['nickname'], ENT_QUOTES)?>"</p>
                                    <p class="name"><?php echo htmlspecialchars($data_player['name'], ENT_QUOTES)?></p>
                                </div>
                                <div class="poste">
                                    <!-- <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson"> -->
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
            
        <div class="coach-title">
            <p><?php echo htmlspecialchars($data_teams_coach['description'], ENT_QUOTES) ?></p>
        </div>

        <div class="content">
            <div class="coachs d-flex flex-wrap">
                <?php 
                    while ($data_coach = $request_coach->fetch()) {
                ?>
                    <div class="coach" style="background-image: url(./img/<?php echo htmlspecialchars($data_coach['image'], ENT_QUOTES)?>);">
                    <a href="./player_sheet.php?player=<?php echo htmlspecialchars($data_coach['id'], ENT_QUOTES)?>">
                            <div class="flag">
                                <img class="flag" id="" src="./img/<?php echo htmlspecialchars($data_coach['nationality'], ENT_QUOTES)?>.png" alt="Drapeau, Alkya, team esport, structure esport">
                            </div>
                            <div class="description d-flex">
                                <div class="name">
                                    <p class="firstname"><?php echo htmlspecialchars($data_coach['firstname'], ENT_QUOTES)?></p>
                                    <p class="nickname">"<?php echo htmlspecialchars($data_coach['nickname'], ENT_QUOTES)?>"</p>
                                    <p class="name"><?php echo htmlspecialchars($data_coach['name'], ENT_QUOTES)?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
            
            <?php include "includes/sponsors.php"; ?>
            
            <?php include "includes/footer.php"; ?>
        
    </body>

</html>