<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/teams_sheet.css">
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Fiche Équipes</title>
    </head>

    <body>

        <?php include "includes/header.php"; ?>

        <div class="illustration">
            <img src="img/team-lol.png" alt="Équipe LOL">
            <p>Notre Line-Up</p>
        </div>

        <div class="players-title">
            <p>Joueurs</p>
        </div>

        <div id="players">
            <img class="image" id="image1" src="img/martin-larsson.png" alt="Texte Martin Larsson">
            <img class="image" id="image2" src="img/text-martin-larsson.png" alt="Texte Martin Larsson">
            <img class="image" id="image3" src="img/flag.png" alt="Drapeau">
        </div>

        <div class="coach-title">
            <p>Coach</p>
        </div>

        <?php include "includes/sponsors.php"; ?>

        <?php include "includes/footer.php"; ?>
        
    </body>

</html>