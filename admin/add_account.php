<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $user_add_id = $_POST["id"];
    $user_add_name = $_POST["name"];
    $user_add_firstname = $_POST["firstname"];
    $user_add_pseudo = $_POST["pseudo"];
    $user_add_password = $_POST["password"];
    $user_add_admin_level = $_POST["admin-level"];

    include "../includes/config.php";
    $peppered_password = hash_hmac("sha256", $user_add_password, $option);
    $password = password_hash($peppered_password, PASSWORD_ARGON2ID);

    // Demander à la base de donnée tous les utilisateurs
    $update_user = $db->prepare("INSERT INTO `users` (`id`, `name`,`firstname`,`pseudo`, `password`, `admin-level`) VALUES (:id, :name, :firstname, :pseudo, :password, :admin_level)");
    $update_user->execute([
        'id' => $user_add_id,
        'name' => $user_add_name,
        'firstname' => $user_add_firstname,
        'pseudo' => $user_add_pseudo,
        'password' => $password,
        'admin_level' => $user_add_admin_level,
    ]);

    header("location: admin_account_management.php");
    exit();
?>