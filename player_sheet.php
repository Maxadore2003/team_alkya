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
                <div class="rekkles d-flex" id="rekkles">
                    <h2>"rekkles"</h2>
                    <div>
                        <img src="img/flag.png" alt="Drapeau">
                    </div>
                </div>
                <div class="image">
                    <img src="img/player.png" alt="Joueur">
                </div>
            </div>
        </div>

        <?php include "includes/sponsors.php"; ?>

        <?php include "includes/footer.php"; ?>
        
    </body>

</html>