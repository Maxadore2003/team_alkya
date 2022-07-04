<?php

    include '../includes/database.php';

    // Demander à la base de donnée le reseau social en fonction de l'id donné
    $request_social_network = $db->prepare("SELECT * FROM `social-network` WHERE `id` = :id");
    $request_social_network->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_social_network->execute();
    $data_social_network = $request_social_network -> fetch();
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
        <title>Confirmation suppression Reseau Social</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom</p>
            <p class="ten">Image</p>
            <p class="ten">Liens</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_social_network['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['image'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_social_network['link'], ENT_QUOTES) ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce Réseau Social. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_social_network.php?&id=<?php echo htmlspecialchars($_GET["id"], ENT_QUOTES) ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>