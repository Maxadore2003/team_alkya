<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $network_add_id = $_POST["id"];
    $network_add_name = $_POST["name"];
    $network_add_image = $_POST["image"];
    $network_add_link = $_POST["link"];

    // Demander à la base de donnée tous les utilisateurs
    $add_network = $db->prepare("INSERT INTO `social-network`(`id`, `name`, `image`, `link`) VALUES ('$network_add_id','$network_add_name','$network_add_image','$network_add_link')");
    $add_network->execute();

    header("location: website_content_management.php");
    exit();
?>
