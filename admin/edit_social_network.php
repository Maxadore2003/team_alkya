<?php

    include "../includes/database.php";

    include "./header_admin.php"

    $social_network_edit_id = $_POST["id"];
    $social_network_edit_name = $_POST["name"];
    $social_network_edit_image = $_POST["image"];
    $social_network_edit_link = $_POST["link"];


    // Demander à la base de donnée tous les utilisateurs
    $update_social_network = $db->prepare("UPDATE `social-network` SET `id`= '$social_network_edit_id', `name`= '$social_network_edit_name',`image`= '$social_network_edit_image',`link`= '$social_network_edit_link' WHERE `id` = :id");
    $update_social_network->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_social_network->execute();

    header("location: website_content_management.php");
    exit();
?>
