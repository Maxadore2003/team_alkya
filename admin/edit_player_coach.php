<?php

    include '../includes/database.php';

    $player_coach_edit_id = $_POST['id'];
    $player_coach_edit_name = $_POST['name'];
    $player_coach_edit_firstname = $_POST['firstname'];
    $player_coach_edit_nickname = $_POST['nickname'];
    $player_coach_edit_nationality = $_POST['nationality'];
    $player_coach_edit_birthday = $_POST['birthday'];
    $player_coach_edit_city = $_POST['city'];
    $player_coach_edit_size = $_POST['size'];
    $player_coach_edit_weight = $_POST['weight'];
    $player_coach_edit_team_arrival = $_POST['team-arrival'];
    $player_coach_edit_game_id = $_POST['game-id'];
    $player_coach_edit_image = $_POST['image'];
    $player_coach_edit_twitter = $_POST['twitter'];
    $player_coach_edit_instagram = $_POST['instagram'];
    $player_coach_edit_twitch = $_POST['twitch'];


    // Demander à la base de donnée tous les utilisateurs
    $update_player_coach = $db->prepare("UPDATE `player` SET `id`= '$player_coach_edit_id', `name`= '$player_coach_edit_name', `firstname`= '$player_coach_edit_firstname', `nickname`= '$player_coach_edit_nickname', `nationality`= '$player_coach_edit_nationality', `birthday`= '$player_coach_edit_birthday', `city`= '$player_coach_edit_city', `size`= '$player_coach_edit_size', `weight`= '$player_coach_edit_weight', `team-arrival`= '$player_coach_edit_team_arrival', `game-id`= '$player_coach_edit_game_id', `image`= '$player_coach_edit_image', `twitter`= '$player_coach_edit_twitter', `instagram`= '$player_coach_edit_instagram', `twitch`= '$player_coach_edit_twitch' WHERE `id` = :id");
    $update_player_coach->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_player_coach->execute();

    header('location: website_content_management.php');
    exit();
?>
