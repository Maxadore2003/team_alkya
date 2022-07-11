<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $team_add_id = $_POST["id"];
    $team_add_game_id = $_POST["game-id"];
    $team_add_name = $_POST["name"];
    $team_add_image = $_POST["image"];


    // Demander à la base de donnée tous les utilisateurs
    $insert_team = $db->prepare("INSERT INTO `team` (`id`, `game-id`, `name`, `image`) VALUES (:id, :game_id, :name, :image)");
    $insert_team->execute([
        'id' => $team_add_id,
        'game_id' => $team_add_game_id,
        'name' => $team_add_name,
        'image' => $team_add_image,
    ]);

    header("location: website_content_management.php");
    exit();
?>
