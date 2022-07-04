<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // supprime une equipe
    $delete_team = $db->prepare("DELETE FROM `game` WHERE `id`= :id");
    $delete_team->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_team->execute();

    header('location: website_content_management.php');
    exit();
?>
