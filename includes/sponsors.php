
<?php
    include_once 'database.php';

    // Demander à la base de donnée le titre de la partie sponsors
    $request_sponsors_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'sponsors'");
    $request_sponsors_title->execute();
    $data_sponsors_title = $request_sponsors_title -> fetch();

    // Demander à la base de donnée le titre de la partie partenaires
    $request_partners_title = $db->prepare("SELECT `description` FROM `text` WHERE `type` = 'title' AND `name` = 'partenaires'");
    $request_partners_title->execute();
    $data_partners_title = $request_partners_title -> fetch();

    // Demander à la base de donnée tous les sponsors
    $request_sponsors = $db->prepare("SELECT * FROM `sponsors` WHERE `type` = 'sponsors'");
    $request_sponsors->execute();

    // Demander à la base de donnée tous les partenaires
    $request_partners = $db->prepare("SELECT * FROM `sponsors` WHERE `type` = 'partners'");
    $request_partners->execute();
?>

<link rel="stylesheet" href="./css/sponsors.css">

<div class="sponsorsPartners">

    <div class="sponsors text-center">
        <h2 class="sponsorsTitle text-uppercase"><?php echo htmlspecialchars($data_sponsors_title['description'], ENT_QUOTES)?></h2>
        <div class="sponsorsImages d-flex flex-wrap align-content-center">
            <?php 
                while($data_sponsors = $request_sponsors->fetch()) {
            ?>
            <div class="sponsorsCard" style="margin: auto;">
                <a href="<?php echo htmlspecialchars($data_sponsors['link'], ENT_QUOTES)?>" target="_blank"><img class="sonsorsImage" src="./img/<?php echo htmlspecialchars($data_sponsors['image'], ENT_QUOTES)?>" alt="<?php echo htmlspecialchars($data_sponsors['name'], ENT_QUOTES)?>"></a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <div class="partners text-center">
        <h2 class="partnersTitle text-uppercase"><?php echo htmlspecialchars($data_partners_title['description'], ENT_QUOTES)?></h2>
        <div class="partnersImages d-flex flex-wrap align-content-center">
            <?php 
                while($data_partners = $request_partners->fetch()) {
            ?>
                <div class="partnersCard" style="margin: auto">
                    <a href="<?php echo htmlspecialchars($data_partners['link'], ENT_QUOTES)?>" target="_blank"><img class='partnersImage' src="./img/<?php echo htmlspecialchars($data_partners['image'], ENT_QUOTES)?>" alt="<?php echo htmlspecialchars($data_partners['name'], ENT_QUOTES)?>"></a>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>