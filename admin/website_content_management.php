<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/header_admin.css">
        <link rel="stylesheet" href="../css/website_content_management.css">
        <title>Gestion du Contenu du Site</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="content d-flex">
            <div class="website-elements">
                <div class="article d-flex text-center">
                    <div class="text">
                        <p>Article</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_article.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_article.php?mode=edit">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_article.php?mode=delete">Supprimer</a>
                    </div>
                </div>
                <div class="team d-flex text-center">
                    <div class="text">
                        <p>Équipe</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_team.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_team.php?mode=edit">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_team.php?mode=delete">Supprimer</a>
                    </div>
                </div>
                <div class="player d-flex text-center">
                    <div class="text">
                        <p>Joueur</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_player.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_player_coach.php?mode=edit&type=player">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_player_coach.php?mode=delete&type=player">Supprimer</a>
                    </div>
                </div>
                <div class="coach d-flex text-center">
                    <div class="text">
                        <p>Coach</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_coach.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_player_coach.php?mode=edit&type=coach">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_player_coach.php?mode=delete&type=coach">Supprimer</a>
                    </div>
                </div>
                <div class="alkya-staff d-flex text-center">
                    <div class="text">
                        <p>Staff d'Alkya</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_staff.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_staff.php?mode=edit">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_staff.php?mode=delete">Supprimer</a>
                    </div>
                </div>
                <div class="texts-zone d-flex text-center">
                    <div>
                        <p>Zone de Texte</p>
                    </div>
                    <div>
                        <a href="#">Ajouter</a>
                    </div>
                    <div>
                        <a href="#">Modifier</a>
                    </div>
                    <div>
                        <a href="#">Supprimer</a>
                    </div>
                </div>
                <div class="links-social-networks d-flex text-center">
                    <div class="text">
                        <p>Liens des Réseaux Sociaux</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_social_network.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_social_network.php?mode=edit">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_social_network.php?mode=delete">Supprimer</a>
                    </div>
                </div>
                <div class="sponsors d-flex text-center">
                    <div class="text">
                        <p>Sponsors / Partenaires</p>
                    </div>
                    <div>
                        <a href="./confirmation_add_sponsors_partners.php">Ajouter</a>
                    </div>
                    <div>
                        <a href="./list_sponsors_partners.php?mode=edit">Modifier</a>
                    </div>
                    <div>
                        <a href="./list_sponsors_partners.php?mode=delete">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>

</html>