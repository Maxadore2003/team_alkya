<?php

    session_start();

    if (isset($_SESSION['connected'])) {
        $connected = true;
    }
    else {
        $connected = false;
    }

?>

<?php

    include_once './includes/database.php';

    $request_header_link = $db->prepare("SELECT * FROM `text` WHERE `type` = 'button' AND `name` LIKE 'header%'");
    $request_header_link->execute();

?>

<nav class="d-flex">
    <div class='logo-navbar'>
        <a href='./' class="logo">
            <img src="img/logo-black-alkya.png" alt="Logo, Alkya, team esport, structure esport, logo-black-alkya.png" title="Logo Black Alkya">
        </a>
    </div>
    <div class='button-navbar'>
        <ul class="">
            <?php
                while ($data_header_link = $request_header_link->fetch()) {
            ?>
            <li class="navbutton">
                <a href="./<?php echo htmlspecialchars($data_header_link['link'], ENT_QUOTES) ?>">
                    <?php echo htmlspecialchars($data_header_link['description'], ENT_QUOTES) ?>
                    <?php
                        if ($connected == true) {
                    ?>
                    <a href="./admin/confirmation_text.php?name=<?php echo htmlspecialchars($data_header_link['name'], ENT_QUOTES) ?>&type=<?php echo htmlspecialchars($data_header_link['type'], ENT_QUOTES) ?>"><img width="30px" src="./img/edit-logo.png" alt="logo crayon, Alkya, team esport, structure esport"></a>
                    <?php
                        }
                    ?>
                </a>
            </li>
            <?php
                }
            ?>
            <!-- <li class="navbutton">
                <a href="#">SHOP</a>
            </li> -->
        </ul>
    </div>
</nav>