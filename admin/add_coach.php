<?php

    include "../includes/database.php";

    $coach_add_id = $_POST["id"];
    $coach_add_name = $_POST["name"];
    $coach_add_firstname = $_POST["firstname"];
    $coach_add_nickname = $_POST["nickname"];
    $coach_add_nationality = $_POST["nationality"];
    $coach_add_birthday = $_POST["birthday"];
    $coach_add_city = $_POST["city"];
    $coach_add_size = $_POST["size"];
    $coach_add_weight = $_POST["weight"];
    $coach_add_team_arrival = $_POST["team-arrival"];
    $coach_add_game_id = $_POST["game-id"];
    $coach_add_image = $_POST["image"];
    $coach_add_twitter = $_POST["twitter"];
    $coach_add_instagram = $_POST["instagram"];
    $coach_add_twitch = $_POST["twitch"];


    // Demander à la base de donnée tous les utilisateurs
    $update_news = $db->prepare("INSERT INTO `player` (`id`, `name`,`firstname`,`nickname`, `nationality`, `birthday`, `city`, `size`, `weight`, `team-arrival`, `game-id`, `image`, `twitter`, `instagram`, `twitch`, `type`) VALUES ("$coach_add_id", "$coach_add_name", "$coach_add_firstname", "$coach_add_nickname", "$coach_add_nationality", "$coach_add_birthday", "$coach_add_city", "$coach_add_size", "$coach_add_weight", "$coach_add_team_arrival", "$coach_add_game_id", "$coach_add_image", "$coach_add_twitter", "$coach_add_instagram", "$coach_add_twitch", "coach")");
    $update_news->execute();

    header("location: website_content_management.php");
    exit();
?>
