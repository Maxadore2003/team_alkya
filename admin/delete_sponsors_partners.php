<?php

    include '../includes/database.php';

    // Demander à la base de supprimer le sponsors avec l'id correspondant
    $delete_sponsors_partners = $db->prepare("DELETE FROM `sponsors` WHERE `id`= :id");
    $delete_sponsors_partners->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $delete_sponsors_partners->execute();

    header('location: website_content_management.php');
    exit();
?>
