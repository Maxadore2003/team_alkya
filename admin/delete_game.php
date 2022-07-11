<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // supprime une equipe
    $delete_game = $db->prepare("DELETE FROM `game` WHERE `id`= :id");
    $delete_game->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_game->execute();

    header('location: website_content_management.php');
    exit();
?>
