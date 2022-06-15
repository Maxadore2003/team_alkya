<?php

    $request_social_network = $db->prepare("SELECT * FROM `social-network`");
    $request_social_network->execute();

?>

<footer class="footer">

    <div class="social-networks">

    <?php while ($data_social_network = $request_social_network->fetch()) { ?>
            <a href=<?php echo $data_social_network['link'] ?> target="_blank">
                <img src="./img/<?php echo $data_social_network['image'] ?>" alt="reseaux sociaux, Alkya, team esport, structure esport, <?php echo $data_social_network['name'] ?>" width="50">
            </a>
        <?php } ?>

        <!-- <a href="https://www.instagram.com/teamalkya/" target="_blank">
                <img src="img/instagram.png" alt="Logo Instagram" width="50">
            </a>
        <a href="https://twitter.com/teamalkya" target="_blank">
            <img src="img/twitter.png" alt="Logo Twitter" width="50">
        </a>
        <a href="https://www.twitch.tv/teamalkya" target="_blank">
            <img src="img/twitch.png" alt="Logo Twitch" width="50">
        </a>
        <a href="#" target="_blank">
            <img src="img/facebook.png" alt="Logo Facebook" width="50">
        </a> -->

    </div>

    <div class="about">

        <p class="text-about">About</p>
        <a href="./news.php?page=0">Actus</a>
        <a href="./teams.php">Teams</a>
        <a href="./about-us.php">Qui sommes-nous ?</a>

    </div>

    <div class="informations">

        <a href="#">CGU</a>
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>

    </div>

    <div class="logo-black-alkya">

        <img src="img/logo-black-alkya.png" alt="Logo Black Alkya" width="100">

    </div>

</footer>