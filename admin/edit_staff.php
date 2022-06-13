<?php

    include "../includes/database.php";

    $staff_edit_id = $_POST["id"];
    $staff_edit_firstname = $_POST["firstname"];
    $staff_edit_name = $_POST["name"];
    $staff_edit_image = $_POST["image"];
    $staff_edit_titlee = $_POST["title"];


    // Demander à la base de donnée tous les utilisateurs
    $update_staff = $db->prepare("UPDATE `staff` SET `id`= "$staff_edit_id", `firstname`= "$staff_edit_firstname",`name`= "$staff_edit_name",`image`= "$staff_edit_image", `title`= "$staff_edit_titlee" WHERE `id` = :id");
    $update_staff->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_staff->execute();

    header("location: website_content_management.php");
    exit();
?>
