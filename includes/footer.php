<?php

    $request_social_network = $db->prepare("SELECT * FROM `social-network`");
    $request_social_network->execute();

    $request_footer_link = $db->prepare("SELECT * FROM `text` WHERE `type` = 'button' AND `name` LIKE 'footer%'");
    $request_footer_link->execute();

    $count = 0;
?>

<footer class="footer">

    <div class="social-networks">

    <?php while ($data_social_network = $request_social_network->fetch()) { ?>
            <a href=<?php echo htmlspecialchars($data_social_network['link'], ENT_QUOTES) ?> target="_blank">
                <img src="./img/<?php echo htmlspecialchars($data_social_network['image'], ENT_QUOTES) ?>" alt="reseaux sociaux, Alkya, team esport, structure esport, <?php echo htmlspecialchars($data_social_network['name'], ENT_QUOTES) ?>" width="50">
            </a>
        <?php } ?>
    </div>

    <div class="about">

        <p class="text-about">About</p>
        <?php
            while ($count < 3 and $data_footer_link = $request_footer_link->fetch()) {
        ?>
        <a href="./<?php echo htmlspecialchars($data_footer_link['link'], ENT_QUOTES) ?>">
            <?php echo htmlspecialchars($data_footer_link['description'], ENT_QUOTES) ?>
            <?php
                if ($connected == true) {
            ?>
            <a href="./admin/confirmation_text.php?name=<?php echo htmlspecialchars($data_footer_link['name'], ENT_QUOTES) ?>&type=<?php echo htmlspecialchars($data_footer_link['type'], ENT_QUOTES) ?>"><img width="30px" src="./img/edit-logo.png" alt="logo crayon, Alkya, team esport, structure esport"></a>
            <?php
                }
            ?>
        </a>
        <?php
            $count += 1;
            }
        ?>

    </div>

    <div class="informations">
        <?php
            while ($data_footer_link = $request_footer_link->fetch()) {
        ?>
        <a href="./<?php echo htmlspecialchars($data_footer_link['link'], ENT_QUOTES) ?>">
            <?php echo htmlspecialchars($data_footer_link['description'], ENT_QUOTES) ?>
            <?php
                if ($connected == true) {
            ?>
            <a href="./admin/confirmation_text.php?name=<?php echo htmlspecialchars($data_footer_link['name'], ENT_QUOTES) ?>&type=<?php echo htmlspecialchars($data_footer_link['type'], ENT_QUOTES) ?>"><img width="30px" src="./img/edit-logo.png" alt="logo crayon, Alkya, team esport, structure esport"></a>
            <?php
                }
            ?>
        </a>
        <?php
            }
        ?>
    </div>

    <div class="logo-black-alkya">

        <img src="img/logo-black-alkya.png" alt="Logo Black Alkya" title="Logo Black Alkya" width="100">

    </div>

</footer>