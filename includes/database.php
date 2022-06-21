<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'team-alkya');
    define('USER', 'root');
    define('PASS', '');

    try {
        $db = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8', USER, PASS);
    }
    catch(PDOException $error) {
        echo $error;
    }
?>