<?php

    include "../includes/database.php";

    include "./header_admin.php"

    $team_edit_id = $_POST["id"];
    $team_edit_name = $_POST["name"];
    $team_edit_global = $_POST["global-image"];
    $team_edit_logo = $_POST["logo-image"];
    $team_edit_team = $_POST["team-image"];


    // Demander à la base de donnée tous les utilisateurs
    $update_team = $db->prepare("UPDATE `game` SET `id`= '$team_edit_id', `name`= '$team_edit_name',`global-image`= '$team_edit_global',`logo-image`= '$team_edit_logo', `team-image`= '$team_edit_team' WHERE `id` = :id");
    $update_team->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_team->execute();

    header("location: website_content_management.php");
    exit();
?>
