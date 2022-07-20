<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $user_edit_id = $_POST["id"];
    $user_edit_pseudo = $_POST["pseudo"];
    $user_edit_name = $_POST["name"];
    $user_edit_firstname = $_POST["firstname"];
    $user_edit_password = $_POST["password"];
    $user_edit_admin_level = $_POST["admin-level"];

    $option = "c1isvFdxMDdmjOlvxpecFw";
    $peppered_password = hash_hmac("sha256", $user_edit_password, $option);
    $password = password_hash($peppered_password, PASSWORD_ARGON2ID);

    // Demander à la base de donnée tous les utilisateurs
    $update_user = $db->prepare("UPDATE `users` SET `id`= :new_id, `name`= :name, `firstname`= :firstname, `pseudo`= :pseudo, `password`= :password, `admin-level`= :admin_level WHERE `id` = :id");
    $update_user->execute([
        'new_id' => $user_edit_id,
        'pseudo' => $user_edit_pseudo,
        'name' => $user_edit_name,
        'firstname' => $user_edit_firstname,
        'password' => $password,
        'admin_level' => $user_edit_admin_level,
        'id' => $_GET['id'],
    ]);

    header("location: admin_account_management.php");
    exit();
?>
