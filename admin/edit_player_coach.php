<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $player_coach_edit_id = $_POST["id"];
    $player_coach_edit_name = $_POST["name"];
    $player_coach_edit_firstname = $_POST["firstname"];
    $player_coach_edit_nickname = $_POST["nickname"];
    $player_coach_edit_nationality = $_POST["nationality"];
    $player_coach_edit_birthday = $_POST["birthday"];
    $player_coach_edit_city = $_POST["city"];
    $player_coach_edit_size = $_POST["size"];
    $player_coach_edit_weight = $_POST["weight"];
    $player_coach_edit_team_arrival = $_POST["team-arrival"];
    $player_coach_edit_game_id = $_POST["game-id"];
    $player_coach_edit_image = $_POST["image"];
    $player_coach_edit_twitter = $_POST["twitter"];
    $player_coach_edit_instagram = $_POST["instagram"];
    $player_coach_edit_twitch = $_POST["twitch"];
    $player_coach_edit_stats = $_POST["game-stats"];


    // Demander à la base de donnée tous les utilisateurs
    $update_player_coach = $db->prepare("UPDATE `player` SET `id`= :new_id, `name`= :name, `firstname`= :firstname, `nickname`= :nickname, `nationality`= :nationality, `birthday`= :birthday, `city`= :city, `size`= :size, `weight`= :weight, `team-arrival`= :team_arrival, `game-id`= :game_id, `image`= :image, `twitter`= :twitter, `instagram`= :instagram, `twitch`= :twitch, `game-stats` = :stats WHERE `id` = :id");
    $update_player_coach->execute([
        'new_id' => $player_coach_edit_id,
        'name' => $player_coach_edit_name,
        'firstname' => $player_coach_edit_firstname,
        'nickname' => $player_coach_edit_nickname,
        'nationality' => $player_coach_edit_nationality,
        'birthday' => $player_coach_edit_birthday,
        'city' => $player_coach_edit_city,
        'size' => $player_coach_edit_size,
        'weight' => $player_coach_edit_weight,
        'team_arrival' => $player_coach_edit_team_arrival,
        'game_id' => $player_coach_edit_game_id,
        'image' => $player_coach_edit_image,
        'twitter' => $player_coach_edit_twitter,
        'instagram' => $player_coach_edit_instagram,
        'twitch' => $player_coach_edit_twitch,
        'stats' => $player_coach_edit_stats,
        'id' => $_GET['id'],
    ]);

    header("location: website_content_management.php");
    exit();
?>
