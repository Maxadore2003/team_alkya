<?php

    include "../includes/database.php";

    include "./header_admin.php";

    $staff_add_id = $_POST["id"];
    $staff_add_firstname = $_POST["firstname"];
    $staff_add_name = $_POST["name"];
    $staff_add_image = $_POST["image"];
    $staff_add_title = $_POST["title"];


    // Demander à la base de donnée tous les utilisateurs
    $insert_staff = $db->prepare("INSERT INTO `staff` (`id`, `firstname`,`name`,`image`, `title`) VALUES ('$staff_add_id', '$staff_add_firstname', '$staff_add_name', '$staff_add_image', '$staff_add_title')");
    $insert_staff->execute();

    header("location: website_content_management.php");
    exit();
?>
