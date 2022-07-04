<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $player_add_id = $_POST["id"];
    $player_add_name = $_POST["name"];
    $player_add_firstname = $_POST["firstname"];
    $player_add_nickname = $_POST["nickname"];
    $player_add_nationality = $_POST["nationality"];
    $player_add_birthday = $_POST["birthday"];
    $player_add_city = $_POST["city"];
    $player_add_size = $_POST["size"];
    $player_add_weight = $_POST["weight"];
    $player_add_team_arrival = $_POST["team-arrival"];
    $player_add_game_id = $_POST["game-id"];
    $player_add_image = $_POST["image"];
    $player_add_twitter = $_POST["twitter"];
    $player_add_instagram = $_POST["instagram"];
    $player_add_twitch = $_POST["twitch"];
    $player_add_game_stats = $_POST["game-stats"];


    // Demander à la base de donnée tous les utilisateurs
    $update_news = $db->prepare("INSERT INTO `player` (`id`, `name`,`firstname`,`nickname`, `nationality`, `birthday`, `city`, `size`, `weight`, `team-arrival`, `game-id`, `image`, `twitter`, `instagram`, `twitch`, `game-stats`, `type`) VALUES ('$player_add_id', '$player_add_name', '$player_add_firstname', '$player_add_nickname', '$player_add_nationality', '$player_add_birthday', '$player_add_city', '$player_add_size', '$player_add_weight', '$player_add_team_arrival', '$player_add_game_id', '$player_add_image', '$player_add_twitter', '$player_add_instagram', '$player_add_twitch', '$player_add_game_stats','player')");
    $update_news->execute();

    header("location: website_content_management.php");
    exit();
?>
