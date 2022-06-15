<?php

    include '../includes/database.php';

    // Demander à la base de donnée tous les utilisateurs
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
        <title>Confirmation modification Staff</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

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
        
        <form method='post' action="edit_staff.php?id=<?php echo $data_staff['id'] ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo $data_staff['id'] ?>">
                <input class="ten text-center" type="text" name="firstname" value="<?php echo $data_staff['firstname'] ?>">
                <input class="ten text-center" type="text" name="name" value="<?php echo $data_staff['name'] ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo $data_staff['image'] ?>">
                <input class="ten text-center" type="texte" name="title" value="<?php echo $data_staff['title'] ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>