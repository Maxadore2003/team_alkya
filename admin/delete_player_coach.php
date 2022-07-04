<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // Demander à la base de donnée tous les utilisateurs
    $delete_player_coach = $db->prepare("DELETE FROM `player` WHERE `id`= :id");
    $delete_player_coach->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_player_coach->execute();

    header('location: website_content_management.php');
    exit();
?>
