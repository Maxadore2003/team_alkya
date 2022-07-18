<?php

    include_once '../includes/database.php';

    include "./header_admin.php";

    // Demander à la base de donnnée de modifier le texte
    $text = $db->prepare("UPDATE `text` SET `description`= :description WHERE `name`= :name AND `type`= :type");
    $text->execute([
        'description' => $_POST['description'],
        'name' => $_GET['name'],
        'type' => $_GET['type'],
    ]);

    $site = "location: ../index.php";
    header($site);
    exit();
?>
