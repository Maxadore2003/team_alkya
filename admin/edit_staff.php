<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $staff_edit_id = $_POST["id"];
    $staff_edit_firstname = $_POST["firstname"];
    $staff_edit_name = $_POST["name"];
    $staff_edit_image = $_POST["image"];
    $staff_edit_title = $_POST["title"];


    // Demander à la base de donnée tous les utilisateurs
    $update_staff = $db->prepare("UPDATE `staff` SET `id`= :new_id, `firstname`= :firstname,`name`= :name,`image`= :image, `title`= :title WHERE `id` = :id");
    $update_staff->execute([
        'new_id' => $staff_edit_id,
        'firstname' => $staff_edit_firstname,
        'name' => $staff_edit_name,
        'image' => $staff_edit_image,
        'title' => $staff_edit_title,
        'id' => $_GET['id'],
    ]);

    header("location: website_content_management.php");
    exit();
?>
