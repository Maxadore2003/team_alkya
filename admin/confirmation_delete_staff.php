<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les staff
    $request_staff = $db->prepare("SELECT * FROM `staff` WHERE `id` = :id");
    $request_staff->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_staff->execute();
    $data_staff = $request_staff -> fetch()
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
        <title>Confirmation suppression staff</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>


        <div class="account-management d-flex text-center">
            <p class="five">ID</p>
            <p class="ten">Prénom</p>
            <p class="ten">Nom</p>
            <p class="ten">Image</p>
            <p class="ten">Titre</p>
        </div>

        <div class="account-management d-flex text-center">
            <p class="five"><?php echo $data_staff['id'] ?></p>
            <p class="ten"><?php echo $data_staff['firstname'] ?></p>
            <p class="ten"><?php echo $data_staff['name'] ?></p>
            <p class="ten"><?php echo $data_staff['image'] ?></p>
            <p class="ten"><?php echo $data_staff['title'] ?></p>
        </div>

        <div class="confirmation text-center">
            <p>Êtes vous sur de vouloir supprimer ce membre du staff. Il sera impossible de le récupérer.</p>
        </div>
        <div class="account-management d-flex text-center">
            <a class="yes" href="./delete_staff.php?&id=<?php echo $_GET["id"] ?>">Oui</a>
            <a class="no" href="./website_content_management.php">Non</a>
        </div>

    </body>

</html>