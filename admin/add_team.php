<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $team_add_id = $_POST["id"];
    $team_add_name = $_POST["name"];
    $team_add_global = $_POST["global-image"];
    $team_add_logo = $_POST["logo-image"];
    $team_add_team = $_POST["team-image"];


    // Demander à la base de donnée tous les utilisateurs
    $insert_team = $db->prepare("INSERT INTO `game` (`id`, `name`,`global-image`,`logo-image`, `team-image`) VALUES (:id, :name, :global, :logo, :team)");
    $insert_team->execute([
        'id' => $team_add_id,
        'name' => $team_add_name,
        'global' => $team_add_global,
        'logo' => $team_add_logo,
        'team' => $team_add_team,
    ]);

    header("location: website_content_management.php");
    exit();
?>
