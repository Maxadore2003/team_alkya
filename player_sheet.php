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

        <div class="martin-rekkles-larsson text-uppercase d-flex">
            <div class="image">
                <img src="img/martin-larsson.png" alt="Martin Larsson">
            </div>
            <div class="presentation">
                <h1>martin "rekkles" larsson</h1>
                <p>ne le 20 septembre 1996</p>
                <div class="place-of-birth d-flex">
                    <p>a älvägen, suede</p>
                    <img src="img/flag.png" alt="Drapeau">
                </div>
                <p>taille 1m80</p>
                <p>poids 75kg</p>
                <p>arrivee au club novembre 2021</p>
                <p>jeu league of legends</p>
            </div>
        </div>

        <div class="career text-uppercase">
            <div class="career-button d-flex">
                <a href="#rekkles">
                    <img src="img/logo-career.png" alt="Logo Carrière">
                </a>
                <p>carriere du joueur</p>
            </div>
            <div class="content d-flex">
                <div class="rekkles" id="rekkles">
                    <div class="flex d-flex">
                        <h2>"rekkles"</h2>
                        <div>
                            <img src="img/flag.png" alt="Drapeau">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-center">parcours</h3>
                        <div class="d-flex">
                            <img src="img/career-first-illustration.png" alt="Illustration">
                            <img class="arrow" src="img/arrow.png" alt="Flêche">
                            <img src="img/career-second-illustration.png" alt="Illustration">
                            <img class="arrow" src="img/arrow.png" alt="Flêche">
                            <img src="img/logo-color-alkya.png" alt="Logo d'Alkya en couleur">
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
        </div>

        <div class="networks text-uppercase">
            <div class="title">
                <h5 class="text-center">ses reseaux</h5>
            </div>
            <div class="images d-flex">
                <img src="img/twitter-color.png" alt="Logo Twitter">
                <img src="img/instagram-color.png" alt="Logo Instagram">
                <img src="img/twitch-color.png" alt="Logo Twitch">
                <img src="img/logo-lol.png" alt="Logo LOL">
            </div>
        </div>

        <?php include "includes/sponsors.php"; ?>

        <?php include "includes/footer.php"; ?>
        
    </body>

</html>