<?php

    include "../includes/database.php";

    include "./header_admin.php";

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
    $update_news = $db->prepare("INSERT INTO `player` (`id`, `name`,`firstname`,`nickname`, `nationality`, `birthday`, `city`, `size`, `weight`, `team-arrival`, `game-id`, `image`, `twitter`, `instagram`, `twitch`, `type`) VALUES (:id, :name, :firstname, :nickname, :nationality, :birthday, :city, :size, :weight, :team_arrival, :game_id, :image, :twitter, :instagram, :twitch, 'coach')");
    $update_news->execute([
        'id' => $coach_add_id,
        'name' => $coach_add_name,
        'firstname' => $coach_add_firstname,
        'nickname' => $coach_add_nickname,
        'nationality' => $coach_add_nationality,
        'birthday' => $coach_add_birthday,
        'city' => $coach_add_city,
        'size' => $coach_add_size,
        'weight' => $coach_add_weight,
        'team_arrival' => $coach_add_team_arrival,
        'game_id' => $coach_add_game_id,
        'image' => $coach_add_image,
        'twitter' => $coach_add_twitter,
        'instagram' => $coach_add_instagram,
        'twitch' => $coach_add_twitch,
    ]);

    header("location: website_content_management.php");
    exit();
?>
