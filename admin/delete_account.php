<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // Demander à la base de donnée tous les utilisateurs
    $delete_user = $db->prepare("DELETE FROM `users` WHERE `id`= :id");
    $delete_user->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_user->execute();

    header('location: admin_account_management.php');
    exit();
?>
