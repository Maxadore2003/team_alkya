<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/header_admin.css">
        <link rel="stylesheet" href="../css/connection.css">
        <title>Connexion</title>
    </head>

    <body>

        <?php include "header_admin.php"; ?>

        <h1 class="text-center">Connexion</h1>

        <form class="text-center" action="login.php" method="post">
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required> <br>
            <input type="password" name="password" id="password" placeholder="Votre Mot de Passe" required> <br>
            <input type="submit" name="send" id="send" value="Connexion">
        </form>
        
    </body>

</html>