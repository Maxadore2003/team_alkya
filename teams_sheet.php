<?php 

    include './includes/database.php';

    // Demander à la base de donnée le titre de teams
    $request_teams_title = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams-sheet-title' AND `type` = 'title'");
    $request_teams_title->execute();
    $data_teams_title = $request_teams_title->fetch();

    // Demander à la base de donnée le titre de la partie Player
    $request_teams_player = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams-sheet-player' AND `type` = 'title'");
    $request_teams_player->execute();
    $data_teams_player = $request_teams_player->fetch();

    // Demander à la base de donnée le titre de la partie Coach
    $request_teams_coach = $db->prepare("SELECT `description` FROM `text` WHERE `name` = 'teams-sheet-coach' AND `type` = 'title'");
    $request_teams_coach->execute();
    $data_teams_coach = $request_teams_coach->fetch();

    // Demander à la base de donnée toutes les données des jeux
    $request_games = $db->prepare("SELECT * FROM `game` WHERE `id` = :game");
    $request_games->bindParam(":game", $_GET["game"], PDO::PARAM_INT);
    $request_games->execute();
    $data_games = $request_games->fetch();

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
            <img src="img/<?php echo $data_games['team-image'] ?>" alt="Game, Alkya, team esport, structure esport, <?php echo $data_games['team-image'] ?>">
            <p><?php echo $data_teams_title['description'] ?></p>
        </div>
        
        <div class="players-title text-right">
            <p><?php echo $data_teams_player['description'] ?></p>
        </div>
        
        <div class="content">            
            <div class="players d-flex flex-wrap">
                <div class="player" style="background-image: url(./img/martin-larsson.png);">
                    <a href="./player_sheet.php?test=test">
                        <div class="flag">
                            <img class="" id="" src="./img/flag.png" alt="Drapeau">
                        </div>
                        <div class="description d-flex">
                            <div class="name">
                                <p class="firstname">Martin</p>
                                <p class="nickname">"Rekless"</p>
                                <p class="name">Larsson</p>
                            </div>
                            <div class="poste">
                                <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson">
                            </div>
                        </div>
                    </a>
                </div>

                
                <div class="player" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                        <div class="poste">
                            <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson">
                        </div>
                    </div>
                </div>

                
                <div class="player" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                        <div class="poste">
                            <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson">
                        </div>
                    </div>
                </div>

                
                <div class="player" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                        <div class="poste">
                            <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson">
                        </div>
                    </div>
                </div>

                
                <div class="player" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                        <div class="poste">
                            <img class="" id="" src="./img/lol-jungle.png" alt="Texte Martin Larsson">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="coach-title">
            <p><?php echo $data_teams_coach['description'] ?></p>
        </div>

        <div class="content">
            <div class="coachs d-flex flex-wrap">
                <div class="coach" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                    </div>
                </div>
                <div class="coach" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                    </div>
                </div>
                <div class="coach" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                    </div>
                </div>
                <div class="coach" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                    </div>
                </div>
                <div class="coach" style="background-image: url(./img/martin-larsson.png);">
                    <div class="flag">
                        <img class="" id="" src="./img/flag.png" alt="Drapeau">
                    </div>
                    <div class="description d-flex">
                        <div class="name">
                            <p class="firstname">Martin</p>
                            <p class="nickname">"Rekless"</p>
                            <p class="name">Larsson</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <?php include "includes/sponsors.php"; ?>
            
            <?php include "includes/footer.php"; ?>
        
    </body>

</html>