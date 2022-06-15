<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_network = $db->prepare("SELECT * FROM `social-network`");
    $request_network->execute();
    $count_network = $request_network->rowCount();

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
        <title>Ajouter un Réseau Social</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="account-management d-flex text-center">
            <p>ID</p>
            <p>Nom du réseau</p>
            <p>Image</p>
            <p>Liens</p>
        </div>
        
        <form method='post' action="add_social_network.php">
            <div class="account-management d-flex text-center">
                <input class="text-center" type="text" name="id" value=<?php echo $count_network ?>>
                <input class="text-center" type="text" name="name">
                <input class="text-center" type="text" name="image">
                <input class="text-center" type="text" name="link">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>