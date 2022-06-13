<?php

    include "../includes/database.php";

    $news_edit_id = $_POST["id"];
    $news_edit_title = $_POST["title"];
    $news_edit_image = $_POST["image"];
    $news_edit_description = $_POST["description"];
    $news_edit_date = $_POST["date"];


    // Demander à la base de donnée tous les utilisateurs
    $update_news = $db->prepare('UPDATE `actuality` SET `id`= "$news_edit_id", `title`= "$news_edit_title",`image`= "$news_edit_image",`description`= "$news_edit_description", `date`= "$news_edit_date" WHERE `id` = :id');
    $update_news->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $update_news->execute();

    header("location: website_content_management.php");
    exit();
?>
