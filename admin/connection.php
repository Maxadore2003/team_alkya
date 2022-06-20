<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/connection.css">
        <title>Connexion</title>
    </head>

    <body>

        <form action="login.php" method="post">
            <h1>Connexion</h1>
            <div class="inputs">
                <input type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required>
                <input type="password" name="password" id="password" placeholder="Votre Mot de Passe" required>
            </div>
            <div class="button" align="center">
                <button type="submit" name="send" id="send">Connexion</button>
                <?php if (isset($ConnexionError)) echo "<div style='color: red; font-weight: bold'>$ConnexionError</div>" ?>
            </div>
        </form>
        
    </body>

</html>