<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $sponsors_partners_add_id = $_POST["id"];
    $sponsors_partners_add_name = $_POST["name"];
    $sponsors_partners_add_image = $_POST["image"];
    $sponsors_partners_add_type = $_POST["type"];
    $sponsors_partners_add_link = $_POST["link"];


    // Demander à la base de donnée tous les utilisateurs
    $add_sponsors_partners = $db->prepare("INSERT INTO `sponsors` (`id`, `name`,`image`,`type`, `link`) VALUES ('$sponsors_partners_add_id', '$sponsors_partners_add_name', '$sponsors_partners_add_image', '$sponsors_partners_add_type', '$sponsors_partners_add_link')");
    $add_sponsors_partners->execute();

    header("location: website_content_management.php");
    exit();
?>
