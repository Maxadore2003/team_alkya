<?php

    include "../includes/database.php";

    extract($_POST);

    if (!empty($pseudo) && !empty($password)) {
        $request = $db->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND password = :password");
        $request->execute([
            "pseudo" => $pseudo,
            "password" => sha1($password),
        ]);
        $result = $request->rowCount();
        if ($result == 1) {
            session_start();
            $_SESSION["connected"] = 1;
            $_SESSION["pseudo"] = $pseudo;
        }
        else {
            $redMessageConnetion = "Connexion échouée !";
            include "connection.php";
            exit();
        }
    }

?>