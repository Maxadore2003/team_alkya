<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'team-alkya');
    define('USER', 'root');
    define('PASS', '');

    try {
        $db = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $error) {
        echo $error;
    }

    // Vérifie s'il existe deja dans la base de donnée
    //
    // $request = $db->prepare("SELECT * FROM users WHERE email = :email");
    // $request->execute([
    //     "email" => $_POST['email'],
    // ]);
    // $result = $request->rowCount();

    //  Insérer dans la base de donnée
    // $sql = "INSERT INTO 'users'";
    // $request = $db->prepare($sql);
    // $request->execute($execute_array);
?>