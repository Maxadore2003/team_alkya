<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $sponsors_partners_edit_id = $_POST["id"];
    $sponsors_partners_edit_name = $_POST["name"];
    $sponsors_partners_edit_image = $_POST["image"];
    $sponsors_partners_edit_type = $_POST["type"];
    $sponsors_partners_edit_link = $_POST["link"];


    // Demander à la base de donnée tous les utilisateurs
    $update_sponsors_partners = $db->prepare("UPDATE `sponsors` SET `id`= :new_id, `name`= :name, `image`= :image, `type`= :type, `link`= :link WHERE `id` = :id");
    $update_sponsors_partners->execute([
        'new_id' => $sponsors_partners_edit_id,
        'name' => $sponsors_partners_edit_name,
        'image' => $sponsors_partners_edit_image,
        'type' => $sponsors_partners_edit_type,
        'link' => $sponsors_partners_edit_link,
        'id' => $_GET['id'],
    ]);

    header("location: website_content_management.php");
    exit();
?>
