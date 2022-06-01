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

        <form action="login.php" method="post">
            <h1 class="text-center">Connexion</h1>
            <div class="content">
                <div class="form-group">
                    <label>Pseudo</label>
                    <input type="text" name="pseudo" placeholder="Pseudo" required="required">
                </div>
                <div class="form-group">
                    <label>Mot de Passe</label>
                    <input type="password" name="password" placeholder="Mot de Passe" required="required">
                </div>
                <div class="submit">
                    <button type="submit">Valider</button>
                </div>
            </div>
        </form>
        
    </body>

</html>