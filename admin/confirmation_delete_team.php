<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les team
    $request_team = $db->prepare("SELECT * FROM `game` WHERE `id` = :id");
    $request_team->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_team->execute();
    $data_team = $request_team -> fetch()
?>


<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/header_admin.css">
        <link rel="stylesheet" href="../css/admin_account_management.css">
        <title>Confirmation suppression équipe</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>


        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom du jeu</p>
            <p class="ten">Image Bannière</p>
            <p class="ten">Image Logo du jeu</p>
            <p class="ten">Image de l'équipe</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo $data_team['id'] ?></p>
            <p class="ten"><?php echo $data_team['name'] ?></p>
            <p class="ten"><?php echo $data_team['global-image'] ?></p>
            <p class="ten"><?php echo $data_team['logo-image'] ?></p>
            <p class="ten"><?php echo $data_team['team-image'] ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer cette équipe. Il sera impossible de la récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_team.php?&id=<?php echo $_GET["id"] ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>