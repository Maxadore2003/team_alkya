<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_sponsors_partners = $db->prepare("SELECT * FROM `sponsors` WHERE `id` = :id");
    $request_sponsors_partners->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_sponsors_partners->execute();
    $data_sponsors_partners = $request_sponsors_partners -> fetch();
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
        <title>Confirmation suppression <?php echo htmlspecialchars($data_news['type'], ENT_QUOTES) ?></title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Nom</p>
            <p class="ten">Image</p>
            <p class="ten">Type</p>
            <p class="ten">Liens</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo htmlspecialchars($data_sponsors_partners['id'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_sponsors_partners['name'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_sponsors_partners['image'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_sponsors_partners['type'], ENT_QUOTES) ?></p>
            <p class="ten"><?php echo htmlspecialchars($data_sponsors_partners['link'], ENT_QUOTES) ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce <?php echo htmlspecialchars($data_sponsors_partners['type'], ENT_QUOTES) ?>. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_sponsors_partners.php?&id=<?php echo htmlspecialchars($_GET["id"], ENT_QUOTES) ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>