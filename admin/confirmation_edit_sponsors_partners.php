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

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

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
        
        <form method='post' action="edit_sponsors_partners.php?id=<?php echo htmlspecialchars($data_sponsors_partners['id'], ENT_QUOTES) ?>">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo htmlspecialchars($data_sponsors_partners['id'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="name" value="<?php echo htmlspecialchars($data_sponsors_partners['name'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="image" value="<?php echo htmlspecialchars($data_sponsors_partners['image'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="type" value="<?php echo htmlspecialchars($data_sponsors_partners['type'], ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="link" value="<?php echo htmlspecialchars($data_sponsors_partners['link'], ENT_QUOTES) ?>">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>