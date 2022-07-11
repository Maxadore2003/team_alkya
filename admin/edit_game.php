<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $team_edit_id = $_POST["id"];
    $team_edit_name = $_POST["name"];
    $team_edit_logo = $_POST["logo"];
    $team_edit_image = $_POST["image"];


    // Demander à la base de donnée tous les utilisateurs
    $update_team = $db->prepare("UPDATE `game` SET `id`= :new_id, `name`= :name, `logo`= :logo, `image`= :image WHERE `id` = :last_id");
    $update_team->execute([
        'new_id' => $team_edit_id,
        'name' => $team_edit_name,
        'logo' => $team_edit_logo,
        'image' => $team_edit_image,
        'last_id' => $_GET['id'],
    ]);

    header("location: website_content_management.php");
    exit();
?>
