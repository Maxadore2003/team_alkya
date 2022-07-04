<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/about-us.css">
        <link rel="stylesheet" href="css/sponsors.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>About Us</title>
    </head>

    <body>

        <?php

            include "./includes/database.php";

            $about_us_images_count = 0;

            // Demander à la base de donnée le titre de la page about us "Qu'est ce que Alkya"
            $request_about_us_what = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'about-us-what'");
            $request_about_us_what->execute();
            $data_about_us_what = $request_about_us_what -> fetch();

            // Demander à la base de donnée la description de la page about us "Qu'est ce que Alkya"
            $request_about_us_desc_what = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'description' AND `name` = 'about-us-desc-what'");
            $request_about_us_desc_what->execute();
            $data_about_us_desc_what = $request_about_us_desc_what -> fetch();

            // Demander à la base de donnée le titre de la page about us "Pourquoi Alkya ?"
            $request_about_us_why = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'about-us-why'");
            $request_about_us_why->execute();
            $data_about_us_why = $request_about_us_why -> fetch();

            // Demander à la base de donnée les 2 images de la page about us
            $request_about_us_images = $db->prepare("SELECT `image` FROM `about-us`");
            $request_about_us_images->execute();

            // Demander à la base de donnée la description de la page about us "Pourquoi Alkya ?"
            $request_about_us_desc_why = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'description' AND `name` = 'about-us-desc-why'");
            $request_about_us_desc_why->execute();
            $data_about_us_desc_why = $request_about_us_desc_why -> fetch();

            // Demander à la base de donnée le titre de la page about us "Staff"
            $request_staff_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'staff'");
            $request_staff_title->execute();
            $data_staff_title = $request_staff_title -> fetch();

            // Demander à la base de donnée les images des 4 staff principaux
            $request_staff_images = $db->prepare("SELECT `image` FROM `staff`");
            $request_staff_images->execute();

            // Demander à la base de donnée les titres sous les images des 4 staff principaux
            $request_staff_title = $db->prepare("SELECT `title` FROM `staff`");
            $request_staff_title->execute();
        
        ?>

        <?php include "includes/header.php"; ?>

        <div class="content">

            <!-- Titre de la page about us "Qu'est ce que Alkya" -->
            <div class='about-us-what'> 
                <h1><?php echo htmlspecialchars($data_about_us_what['description'], ENT_QUOTES)?></h1>
            </div>

            <!-- Description de la page about us "Qu'est ce que Alkya" -->
            <div class='about-us-desc-what'> 
                <p class="text-center"><?php echo htmlspecialchars($data_about_us_desc_what['description'], ENT_QUOTES)?></p>
            </div>

            <!-- Titre de la page about us "Pourquoi Alkya" -->
            <div class='about-us-why'> 
                <h1><?php echo htmlspecialchars($data_about_us_why['description'], ENT_QUOTES)?></h1>
            </div>

            <!-- Les 2 images de la page about us -->
            <div class='d-flex text-center images'>
                <?php
                    while($data_about_us_images = $request_about_us_images -> fetch() and $about_us_images_count < 2 ) {?>
                    <div class='about-us-images'>
                        <img src='img/<?php echo htmlspecialchars($data_about_us_images['image'], ENT_QUOTES)?>' alt='a propos, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_about_us_images['image'], ENT_QUOTES)?>'>
                    </div>
                <?php
                    $about_us_images_count += 1;
                    }
                ?> 
            </div>

            <!-- Description de la page about us "Pourquoi Alkya" -->
            <div class='about-us-desc-why'> 
                <p class="text-center"><?php echo htmlspecialchars($data_about_us_desc_why['description'], ENT_QUOTES)?></p>
            </div>

            <!-- Titre de la page about us "Staff" -->
            <div class='staff-title'> 
                <h1><?php echo htmlspecialchars($data_staff_title['description'], ENT_QUOTES)?></h1>
            </div>

            <!-- Les 4 staff importants -->
            <div class='d-flex flex-wrap text-center staff'>
                <?php
                    while($data_staff_images = $request_staff_images -> fetch() and $data_staff_title = $request_staff_title -> fetch()) {?>
                    <div class='staffImage'>
                        <img src='img/<?php echo htmlspecialchars($data_staff_images['image'], ENT_QUOTES)?>' alt='staff, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_staff_images['image'], ENT_QUOTES)?>'>
                        <p><?php echo htmlspecialchars($data_staff_title['title'], ENT_QUOTES)?></p>
                    </div>
                <?php
                    }
                ?> 
            </div>

        </div>

        <?php include "includes/sponsors.php"; ?>
        
        <?php include "includes/footer.php"; ?>
        
    </body>

</html>