<?php

    include '../includes/database.php';

    $news_edit_id = $_POST['id'];
    $news_edit_title = $_POST['title'];
    $news_edit_image = $_POST['image'];
    $news_edit_description = $_POST['description'];
    $news_edit_date = $_POST['date'];


    // Demander à la base de donnée tous les utilisateurs
    $update_news = $db->prepare('INSERT INTO `actuality` (`id`, `title`,`image`,`description`, `date`) VALUES ('$news_edit_id', '$news_edit_title', '$news_edit_image', '$news_edit_description', '$news_edit_date')');
    $update_news->execute();

    header('location: website_content_management.php');
    exit();
?>
