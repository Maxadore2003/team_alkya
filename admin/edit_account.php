<?php

    include "../includes/database.php";

    $user_edit_id = $_POST["id"];
    $user_edit_pseudo = $_POST["pseudo"];
    $user_edit_name = $_POST["name"];
    $user_edit_firstname = $_POST["firstname"];
    $user_edit_password = $_POST["password"];
    $user_edit_admin_level = $_POST["admin-level"];


    // Demander à la base de donnée tous les utilisateurs
    $update_user = $db->prepare('UPDATE `users` SET `id`= "$user_edit_id", `name`= "$user_edit_name",`firstname`= "$user_edit_firstname",`pseudo`= "$user_edit_pseudo", `password`= "$user_edit_password", `admin-level`= "$user_edit_admin_level" WHERE `id` = :id');
    $update_user->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_user->execute();

    header("location: admin_account_management.php");
    exit();
?>
