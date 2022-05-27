<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/teams.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Équipes</title>
    </head>

    <body>

        <?php include "includes/header.php"; ?>
    
        <div class="title">
            <h3>Nos Equipes</h3>
        </div>

        <div class="teams d-flex flex-wrap text-center">
            <a class="logo-lol" href="./teams_sheet.php" background-image="url(../img/team-lol.png)">
                <img src="img/logo-lol.png" alt="Logo LOL">
            </a>
            <a class="logo-valorant" href="./teams_sheet.php">
                <img src="img/logo-valorant.png" alt="Logo Valorant">
            </a>
            <a class="logo-rainbow-siege" href="./teams_sheet.php">
                <img src="img/logo-rainbow-siege.png" alt="Logo Rainbow Siege">
            </a>
            <a class="logo-rocket-league" href="./teams_sheet.php">
                <img src="img/logo-rocket-league.png" alt="Logo Rocket League">
            </a>
        </div>

        <?php include "includes/footer.php"; ?>
        
    </body>

</html>