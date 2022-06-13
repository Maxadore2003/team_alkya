<?php

    include "../includes/database.php";

    $user_edit_id = $_POST["id"];
    $user_edit_name = $_POST["name"];
    $user_edit_firstname = $_POST["firstname"];
    $user_edit_pseudo = $_POST["pseudo"];
    $user_edit_password = $_POST["password"];
    $user_edit_admin_level = $_POST["admin-level"];


    // Demander à la base de donnée tous les utilisateurs
    $update_user = $db->prepare("INSERT INTO `users` (`id`, `name`,`firstname`,`pseudo`, `password`, `admin-level`) VALUES ("$user_edit_id", "$user_edit_name", "$user_edit_firstname", "$user_edit_pseudo", "$user_edit_password", "$user_edit_admin_level")");
    $update_user->execute();

    header("location: admin_account_management.php");
    exit();
?>
