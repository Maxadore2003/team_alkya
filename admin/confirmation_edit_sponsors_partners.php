<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
    $request_sponsors_partners = $db->prepare("SELECT * FROM `sponsors` WHERE `id` = :id");
    $request_sponsors_partners->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_sponsors_partners->execute();
    $data_sponsors_partners = $request_sponsors_partners -> fetch()
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
        <title>Confirmation modification Article</title>
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
            <p class="five"><?php echo $data_sponsors_partners['id'] ?></p>
            <p class="ten"><?php echo $data_sponsors_partners['name'] ?></p>
            <p class="ten"><?php echo $data_sponsors_partners['image'] ?></p>
            <p class="ten"><?php echo $data_sponsors_partners['type'] ?></p>
            <p class="ten"><?php echo $data_sponsors_partners['link'] ?></p>
        </div>
        
        <form method='post' action="edit_sponsors_partners.php?id=<?php echo $data_sponsors_partners['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo $data_sponsors_partners['id'] ?>">
                <input class="ten text-center" type="text" name="name" value="<?php echo $data_sponsors_partners['name'] ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo $data_sponsors_partners['image'] ?>">
                <input class="ten text-center" type="text" name="type" value="<?php echo $data_sponsors_partners['type'] ?>">
                <input class="ten text-center" type="text" name="link" value="<?php echo $data_sponsors_partners['link'] ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>