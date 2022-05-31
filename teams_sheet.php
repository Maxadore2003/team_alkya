<?php 

    include './includes/database.php'

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
            <img src="img/team-lol.png" alt="Équipe LOL">
            <p>Notre Line-Up</p>
        </div>

        <div class="content">
            
            <div class="players-title">
                <p>Joueurs</p>
            </div>
            
            <div class="players d-flex flex-wrap">
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
            
            <div class="coach-title">
                <p>Coach</p>
            </div>

            
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
            </div>




        </div>
            
            <?php include "includes/sponsors.php"; ?>
            
            <?php include "includes/footer.php"; ?>
        
    </body>

</html>