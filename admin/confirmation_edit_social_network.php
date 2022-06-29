<?php

    include '../includes/database.php';

    // Demander à la base de donnée le reseau social avec l'id donné
    $request_social_network = $db->prepare("SELECT * FROM `social-network` WHERE `id` = :id");
    $request_social_network->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $request_social_network->execute();
    $data_social_network = $request_social_network -> fetch()
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
        <title>Confirmation modification Reseau Social</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

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
        
        <form method='post' action="edit_social_network.php?id=<?php echo $data_social_network['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo $data_social_network['id'] ?>">
                <input class="ten text-center" type="text" name="name" value="<?php echo $data_social_network['name'] ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo $data_social_network['image'] ?>">
                <input class="ten text-center" type="text" name="link" value="<?php echo $data_social_network['link'] ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>