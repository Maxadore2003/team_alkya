<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // Demander à la base de donnée tous les utilisateurs
    $delete_staff = $db->prepare("DELETE FROM `staff` WHERE `id`= :id");
    $delete_staff->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_staff->execute();

    header('location: website_content_management.php');
    exit();
?>
