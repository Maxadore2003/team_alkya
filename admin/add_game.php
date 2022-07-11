<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $game_add_id = $_POST["id"];
    $game_add_name = $_POST["name"];
    $game_add_logo = $_POST["logo"];
    $game_add_image = $_POST["image"];


    // Demander à la base de donnée tous les utilisateurs
    $insert_game = $db->prepare("INSERT INTO `game` (`id`, `name`, `logo`, `image`) VALUES (:id, :name, :logo, :image)");
    $insert_game->execute([
        'id' => $game_add_id,
        'name' => $game_add_name,
        'logo' => $game_add_logo,
        'image' => $game_add_image,
    ]);

    header("location: website_content_management.php");
    exit();
?>
