<?php

    include_once '../includes/database.php';

    // Demander à la base de donnnée le texte
    $text = $db->prepare("SELECT * FROM `text` WHERE `name`= :name AND `type`= :type");
    $text->execute([
        'name' => $_GET['name'],
        'type' => $_GET['type'],
    ]);
    $data_text = $text->fetch();
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
        <title>Modifier un text</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <div class="text-center">
            <a href="https://www.graphorama.net/Caracteres-speciaux-codes-ASCII-et-HTML-Alt-codes.html">Les caractères ASCII</a>
        </div>

        <div class="content text-center">    
            <form action="./edit_text.php?name=<?php echo htmlspecialchars($_GET['name'], ENT_QUOTES) ?>&type=<?php echo htmlspecialchars($_GET['type'], ENT_QUOTES) ?>" method="post">
                <input class="edit-text text-center" type="text" name="description" value="<?php echo htmlspecialchars($data_text['description'], ENT_QUOTES) ?>">
                <input type="submit">
            </form>
        </div>

    </body>

</html>