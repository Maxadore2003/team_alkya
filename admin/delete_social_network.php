<?php

    include '../includes/database.php';

    // Demander à la base de supprimer le réseau social avec l'id correspondant
    $delete_social_network = $db->prepare("DELETE FROM `social-network` WHERE `id`= :id");
    $delete_social_network->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_social_network->execute();

    header('location: website_content_management.php');
    exit();
?>
