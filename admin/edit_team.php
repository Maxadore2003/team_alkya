<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $team_edit_id = $_POST["id"];
    $team_edit_name = $_POST["name"];
    $team_edit_global = $_POST["global-image"];
    $team_edit_logo = $_POST["logo-image"];
    $team_edit_team = $_POST["team-image"];


    // Demander à la base de donnée tous les utilisateurs
    $update_team = $db->prepare("UPDATE `game` SET `id`= :new_id, `name`= :name, `global-image`= :global, `logo-image`= :logo, `team-image`= :team WHERE `id` = :id");
    $update_team->execute([
        'new_id' => $team_edit_id,
        'name' => $team_edit_name,
        'global' => $team_edit_global,
        'logo' => $team_edit_logo,
        'team' => $team_edit_team,
        'id' => $_GET['id'],
    ]);

    header("location: website_content_management.php");
    exit();
?>
