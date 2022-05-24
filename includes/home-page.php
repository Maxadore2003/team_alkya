<?php
    include_once 'database.php';

    $staff_count = 0;

    // Demander à la base de donnée le titre de la description
    $request_description_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'description-home-page'");
    $request_description_title->execute();
    $data_description_title = $request_description_title -> fetch();

    // Demander à la base de donnée la description de la description
    $request_description_text = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'description' AND `name` = 'description-home-page'");
    $request_description_text->execute();
    $data_description_text = $request_description_text -> fetch();

    // Demander à la base de donnée les images des 4 staff principaux
    $request_staff_image = $db->prepare("SELECT `image` FROM `staff`");
    $request_staff_image->execute();

    // Demander à la base de donnée le titre de la partie jeu
    $request_game_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'game-home-page'");
    $request_game_title->execute();
    $data_game_title = $request_game_title -> fetch();

    // Demander à la base de donnée le bouton de la partie jeu
    $request_game_button = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'button' AND `name` = 'game-home-page'");
    $request_game_button->execute();
    $data_game_button = $request_game_button -> fetch();

    // Demander à la base de donnée le titre de la partie actualité
    $request_actuality_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'actuality-home-page'");
    $request_actuality_title->execute();
    $data_actuality_title = $request_actuality_title -> fetch();

    // Demander à la base de donnée le bouton de la partie jeu
    $request_actuality_button = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'button' AND `name` = 'actuality-home-page'");
    $request_actuality_button->execute();
    $data_actuality_button = $request_actuality_button -> fetch();
?>
<div>   
    <div class='description'> 
        <h1><?php echo $data_description_title['description']?></h1>
        <p class='homePageDescription'><?php echo $data_description_text['description']?></p>
    </div>

    <div class='d-flex gap-3 text-center staff'>
        <?php
            while($data_staff_image = $request_staff_image -> fetch()) {?>
            <div class='staffImage'>
                <img src='img/<?php echo $data_staff_image['image']?>' alt='staff, Alkya, team esport, structure esport, <?php echo $data_staff_image['image']?>'>
            </div>
        <?php
            $staff_count += 1;
            }
        ?> 
    </div>

    <div class="game">
        <h2 class='gameTitle text-center'><?php echo $data_game_title['description']?></h2>
        <div class="gameImage text-center">
            <img src="img/valorant.png" alt="jeux, Alkya, team esport, structure esport"></img>
        </div>
        <div class='gameButton text-center'>
            <a class='linkTeam' href="./team.php"><?php echo $data_game_button['description']?></a>
        </div>
        
    </div>

    <div class="actuality">

    </div>
</div>
