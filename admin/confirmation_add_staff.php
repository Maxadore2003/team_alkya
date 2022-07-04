<?php

    include '../includes/database.php';
    // Demander à la base de donnée tous les utilisateurs
    $request_staff = $db->prepare("SELECT * FROM `staff`");
    $request_staff->execute();
    $count_staff = $request_staff->rowCount();

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
        <title>Ajouter un membre du Staff</title>
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
        
        <form method='post' action="./add_staff.php">
            <div class="account-management d-flex text-center">
                <input class="five text-center" type="text" name="id" value="<?php echo htmlspecialchars($count_staff, ENT_QUOTES) ?>">
                <input class="ten text-center" type="text" name="firstname">
                <input class="ten text-center" type="text" name="name">
                <input class="ten text-center" type="text" name="image">
                <input class="ten text-center" type="texte" name="title">
            </div>
            <div class="submit text-center">
                <input type="submit">
            </div>
        </form>

    </body>

</html>