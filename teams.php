<?php

    session_start();

    if (isset($_SESSION['connected'])) {
        $connected = true;
    }
    else {
        $connected = false;
    }

?>

<?php

    include 'includes/database.php';
    // Demander à la base de donnée toutes les données des jeux
    if (isset($_GET['game'])) {
        $game_id = $_GET['game'];
        $request_games = $db->prepare("SELECT * FROM `team` WHERE `game-id` = :gameId");
        $request_games->execute([
            'gameId' => (int)$game_id,
        ]);
    }
    else {
        $request_games = $db->prepare("SELECT * FROM `team`");
        $request_games->execute();
    }


    // Demander à la base de donnée le titre de teams
    $request_game_button = $db->prepare("SELECT * FROM `game`");
    $request_game_button->execute();
    
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

        <div class='button-game d-flex'>
            <a href="./teams.php">All</a>
            <?php while ($data_game_button = $request_game_button->fetch()) {
            ?>
            <a href="./teams.php?game=<?php echo $data_game_button['id'] ?>"><?php echo $data_game_button['name'] ?></a>
            <?php
            }
            ?>
        </div>

        <div class="teams d-flex flex-wrap text-center">
            <?php while ($data_games = $request_games->fetch()) {
                // demander a la base de donnée le jeu par rapport a la team
                $request_game = $db->prepare("SELECT * FROM `game` WHERE `id` = :gameId");
                $request_game->execute([
                    'gameId' => $data_games['game-id'],
                ]);
                $data_game = $request_game->fetch();
            ?>
            <a class="team" href="./teams_sheet.php?game=<?php echo htmlspecialchars($data_games['id'], ENT_QUOTES)?>" style="background-image: url(./img/<?php echo htmlspecialchars($data_games['image'], ENT_QUOTES)?>)">
                <img src="img/<?php echo htmlspecialchars($data_game['logo'], ENT_QUOTES)?>" alt="Logo <?php echo htmlspecialchars($data_game['name'], ENT_QUOTES)?>, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_game['logo'], ENT_QUOTES)?>">
            </a>
            <?php
            }
            ?>

        </div>

        <?php include "includes/sponsors.php"; ?>
        <?php include "includes/footer.php"; ?>
        
    </body>

</html>