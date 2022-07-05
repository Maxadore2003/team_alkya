<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $network_add_id = $_POST["id"];
    $network_add_name = $_POST["name"];
    $network_add_image = $_POST["image"];
    $network_add_link = $_POST["link"];

    // Demander à la base de donnée tous les utilisateurs
    $add_network = $db->prepare("INSERT INTO `social-network`(`id`, `name`, `image`, `link`) VALUES (:id, :name, :image, :link)");
    $add_network->execute([
        'id' => $network_add_id,
        'name' => $network_add_name,
        'image' => $network_add_image,
        'link' => $network_add_link,
    ]);

    header("location: website_content_management.php");
    exit();
?>
