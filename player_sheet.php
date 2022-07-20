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

    include './includes/database.php';
    
    // Demander à la base de donnée tous les joueurs de la team
    $request_player = $db->prepare("SELECT * FROM `player` WHERE `id` = :player");
    $request_player->bindParam(":player", $_GET["player"], PDO::PARAM_INT);
    $request_player->execute();
    $data_player = $request_player->fetch();

    // Demander à la base de donnée tous les joueurs de la team
    $request_game = $db->prepare("SELECT * FROM `game` WHERE `id` = :game");
    $request_game->bindParam(":game", $data_player["game-id"], PDO::PARAM_INT);
    $request_game->execute();
    $data_game = $request_game->fetch();

    // Demander à la base de donnée le titre des reseaux
    $request_network_title = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'player-sheet' AND `type` = 'title'");
    $request_network_title->execute();
    $data_network_title = $request_network_title->fetch();

    function day($date) {
        return $date[8] * 10 + $date[9];
    };

    function year($date) {
        return $date[0] * 1000 + $date[1] * 100 + $date[2] * 10 + $date[3];
    };

    function month($date) {
        $month = $date[5] * 10 + $date[6];
        switch ($month) {
            case 1:
                return 'Janvier';
            case 2:
                return 'Février';
            case 3:
                return 'Mars';
            case 4:
                return 'Avril';
            case 5:
                return 'Mai';
            case 6:
                return 'Juin';
            case 7:
                return 'Juillet';
            case 8:
                return 'Août';
            case 9:
                return 'Septembre';
            case 10:
                return 'Octobre';
            case 11:
                return 'Novembre';
            case 12:
                return 'Décembre';
        }
    };
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/player_sheet.css">
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Fiche Joueur</title>
    </head>

    <body>

        <?php include "includes/header.php"; ?>

        <div class="people text-uppercase d-flex">
            <div class="image">
                <img src="img/<?php echo htmlspecialchars($data_player['image'], ENT_QUOTES)?>" alt="<?php echo htmlspecialchars($data_player['firstname'], ENT_QUOTES)?> <?php echo htmlspecialchars($data_player['name'], ENT_QUOTES)?>">
            </div>
            <div class="presentation">
                <h1><?php echo htmlspecialchars($data_player['firstname'], ENT_QUOTES)?> "<?php echo htmlspecialchars($data_player['nickname'], ENT_QUOTES)?>" <?php echo htmlspecialchars($data_player['name'], ENT_QUOTES)?></h1>
                <p>
                    né le <?php echo day($data_player['birthday']) ?> 
                    <?php echo month($data_player['birthday']) ?> 
                    <?php echo year($data_player['birthday']) ?> 
                </p>
                <div class="place-of-birth d-flex">
                    <p>à <?php echo htmlspecialchars($data_player['city'], ENT_QUOTES)?>, <?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?></p>
                    <img src="img/<?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?>.png" alt="Drapeau <?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?>">
                </div>
                <p>taille <?php echo htmlspecialchars($data_player['size'][0], ENT_QUOTES)?>m<?php echo htmlspecialchars($data_player['size'][1], ENT_QUOTES)?><?php echo htmlspecialchars($data_player['size'][2], ENT_QUOTES)?></p>
                <p>poids <?php echo htmlspecialchars($data_player['weight'], ENT_QUOTES)?>kg</p>
                <p>arrivee au club <?php echo month($data_player['team-arrival']) ?> <?php echo year($data_player['team-arrival'])?></p>
                <p>jeu <?php echo htmlspecialchars($data_game['name'], ENT_QUOTES)?></p>
            </div>
        </div>

        <!-- <div class="career text-uppercase">
            <div class="career-button d-flex">
                <a href="#player">
                    <img src="img/logo-career.png" alt="Logo Carrière">
                </a>
                <p>carriere du joueur</p>
            </div>
            <div class="content d-flex">
                <div class="player" id="player">
                    <div class="flex d-flex">
                        <h2>"<?php echo htmlspecialchars($data_player['nickname'], ENT_QUOTES)?>"</h2>
                        <div>
                            <img src="img/<?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?>.png" alt="Drapeau <?php echo htmlspecialchars($data_player['nationality'], ENT_QUOTES)?>">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-center">parcours</h3>
                        <div class="d-flex">
                            <img class="illustration" src="img/career-first-illustration.png" alt="Illustration">
                            <img class="arrow" src="img/arrow.png" alt="Flêche">
                            <img class="illustration" src="img/career-second-illustration.png" alt="Illustration">
                            <img class="arrow" src="img/arrow.png" alt="Flêche">
                            <img class="illustration" src="img/logo-color-alkya.png" alt="Logo d'Alkya en couleur">
                        </div>
                        <div class="dates d-flex">
                            <p>2015-2020</p>
                            <p>2020-2021</p>
                            <p>2021</p>
                        </div>
                    </div>
                    <div class="palmares">
                        <h4 class="text-center">palmares</h4>
                    </div>
                </div>
                <div class="image">
                    <img src="img/player.png" alt="Joueur">
                </div>
            </div>
        </div> -->

        <div class="networks text-uppercase">
            <div class="title">
                <h5 class="text-center">
                    <?php echo htmlspecialchars($data_network_title['description'], ENT_QUOTES)?>
                    <?php
                        if ($connected == true) {
                    ?>
                    <a href="./admin/confirmation_text.php?name=player-sheet&type=title"><img width="30px" src="./img/edit-logo.png" alt="logo crayon, Alkya, team esport, structure esport"></a>
                    <?php
                        }
                    ?>
                </h5>
            </div>
            <div class="images d-flex text-center">
                <div class="network text-center">
                    <a href="https://twitter.com/<?php echo htmlspecialchars($data_player['twitter'], ENT_QUOTES)?>" target="_blank"><img src="img/twitter-color.png" alt="Logo Twitter"></a>
                </div>
                <div class="network text-center">
                    <a href="https://www.instagram.com/<?php echo htmlspecialchars($data_player['instagram'], ENT_QUOTES)?>/" target="_blank"><img src="img/instagram-color.png" alt="Logo Instagram"></a>
                </div>
                <div class="network text-center">
                    <a href="https://www.twitch.tv/<?php echo htmlspecialchars($data_player['twitch'], ENT_QUOTES)?>" target="_blank"><img src="img/twitch-color.png" alt="Logo Twitch"></a>
                </div>
                <div class="network text-center">
                    <a href="<?php echo htmlspecialchars($data_game['stats'], ENT_QUOTES)?><?php echo htmlspecialchars($data_player['game-stats'], ENT_QUOTES)?>" target="_blank"><img src="img/<?php echo htmlspecialchars($data_game['logo'], ENT_QUOTES)?>" alt="Logo <?php echo htmlspecialchars($data_game['name'], ENT_QUOTES)?>"></a>
                </div>
            </div>
        </div>

        <?php include "includes/sponsors.php"; ?>

        <?php include "includes/footer.php"; ?>
        
    </body>

</html>