<?php

    $request_social_network = $db->prepare("SELECT * FROM `social-network`");
    $request_social_network->execute();

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

        <img src="img/logo-black-alkya.png" alt="Logo Black Alkya" title="Logo Black Alkya" width="100">

    </div>

</footer>