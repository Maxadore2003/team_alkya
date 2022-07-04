<?php

    include '../includes/database.php';

    include "./header_admin.php";

    // Demander à la base de donnée tous les utilisateurs
    $delete_news = $db->prepare("DELETE FROM `actuality` WHERE `id`= :id");
    $delete_news->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_news->execute();

    header('location: website_content_management.php');
    exit();
?>
